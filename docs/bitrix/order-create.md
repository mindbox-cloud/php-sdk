# Создание заказа (CreateAuthorizedOrder / CreateUnauthorizedOrder)

После сохранения заказа в Битрикс в Mindbox вызывается операция создания заказа: для **авторизованного** покупателя — `**Website.CreateAuthorizedOrder`**, для **гостя** — `**Website.CreateUnauthorizedOrder`** (имена в проекте — **уточните у менеджера**).

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`).

---

## Параметры интеграции

### Авторизованный покупатель — `Website.CreateAuthorizedOrder`


| Параметр                 | Значение                                                                                                                                 |
| ------------------------ | ---------------------------------------------------------------------------------------------------------------------------------------- |
| Операция Mindbox         | `Website.CreateAuthorizedOrder`                                                                                                          |
| DeviceUUID               | Да — в `createAuthorizedOrder` запрос к API v3 формируется **с DeviceUUID** (реализация в SDK)                                           |
| Синхронность             | **Асинхронно** (`isSync: false`) — задаётся внутри `OrderHelper::createAuthorizedOrder()`, отдельного параметра нет                      |
| Точка интеграции Битрикс | Обработчик `**sale:OnSaleOrderSaved`** (при необходимости отфильтруйте только **новый** заказ / первое сохранение — по правилам проекта) |
| Хелпер SDK               | `$mindbox->order()->createAuthorizedOrder($order, $operationName)`                                                                       |


```php
public function createAuthorizedOrder(OrderCreateRequestDTO $order, $operationName)
```

### Гость — `Website.CreateUnauthorizedOrder`


| Параметр                 | Значение                                                                                                                                                                                |
| ------------------------ | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Операция Mindbox         | `Website.CreateUnauthorizedOrder`                                                                                                                                                       |
| DeviceUUID               | Да — в `createUnauthorizedOrder` в SDK так же передаётся **DeviceUUID** (`addDeviceUUID: true`), режим запроса к API **асинхронный** (`isSync: false`), отдельных параметров метода нет |
| Точка интеграции Битрикс | Тот же `**OnSaleOrderSaved`**, ветвление по `Order::getUserId()` (или аналогу): **0** — гость → `createUnauthorizedOrder`                                                               |
| Хелпер SDK               | `$mindbox->order()->createUnauthorizedOrder($order, $operationName)`                                                                                                                    |


```php
public function createUnauthorizedOrder(OrderCreateRequestDTO $order, $operationName)
```

**Клиент в DTO:** для гостя заполните контактные данные по контракту операции (часто **email** и/или **телефон** без `bitrixId`); для авторизованного — как минимум `**setId('bitrixId', …)`** у `CustomerRequestDTO`.

---

## Передаваемые данные заказа


| Поле             | Описание                                                                                                                                                          |
| ---------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `orderId`        | Внешний ID заказа — `OrderCreateRequestDTO::setId('bitrixId', …)` (или другое имя внешнего id по договорённости с Mindbox)                                        |
| `customer`       | Покупатель — `CustomerRequestDTO`: email, телефон, `bitrixId` и др.                                                                                               |
| `lines`          | Состав — `LineRequestCollection` из `LineRequestDTO` (товар, количество, цены — по полям операции)                                                                |
| `totalPrice`     | Итог — при необходимости через поля операции / `customFields` (в базовом `OrderCreateRequestDTO` отдельного `setTotalPrice` может не быть — уточните у менеджера) |
| `discountAmount` | Скидки — `setDiscounts` / поля операции                                                                                                                           |
| `deliveryType`   | Доставка — например `setDeliveryCost`, кастомные поля                                                                                                             |
| `paymentType`    | Оплата — `setPayments` (`PaymentRequestCollection`)                                                                                                               |


Конкретный набор полей зависит от настройки операции в Mindbox.

---

## Рекомендации

- `**PriceHasBeenChanged`.** Если после успешного HTTP-ответа поле **статуса операции** Mindbox в теле ответа равно `**PriceHasBeenChanged`** (точная строка — по контракту операции; в SDK удобно смотреть `$response->getMindboxStatus()`), **не** считайте оформление в Mindbox успешным для пользователя: покажите понятную ошибку или предупреждение и **пересчитайте корзину** — для авторизованного пользователя `[CalculateAuthorizedCart](./cart-calculate.md)`, для гостя — `[CalculateCart` / `CalculateUnauthorizedCart](./cart-calculate.md)` по правилам проекта.
- **Ответы 5xx и повторы.** При недоступности API (в SDK типичные **500** и **503** приходят как `Mindbox\Exceptions\MindboxUnavailableException`) имеет смысл выполнить **до трёх повторов** той же операции с **паузой 5 секунд** между попытками. Если после **первой попытки + 3 повтора** успеха нет — **переходите к обработке заказа без процессинга Mindbox**: не блокируйте клиента на оплате/завершении в Битрикс, зафиксируйте ситуацию в логах и предусмотрите ручную или отложенную синхронизацию с Mindbox. Иные коды **5xx** в текущей версии SDK могут обрабатываться иначе (см. `AbstractMindboxClient::parseRawResponse`) — при политике «любой 5xx» уточните перехват исключений по логам.

---

## Событие

Модуль `**sale`**, событие `**OnSaleOrderSaved**`. В обработчик передаётся `**Main\Event**`; объект заказа обычно доступен как `**$event->getParameter('ENTITY')**` (`\Bitrix\Sale\Order`). Уточните имя параметра в [документации событий sale](https://dev.1c-bitrix.ru/api_d7/bitrix/sale/) для вашей версии.

Событие может срабатывать при **каждом** сохранении заказа — добавьте условие, чтобы не дублировать создание в Mindbox (например только новый заказ или смена статуса).

---

## Полный пример

Вставьте в `local/php_interface/include/mindbox.php` (или отдельный файл) рядом с другими обработчиками.

```php
<?php

use Bitrix\Main\Event;
use Bitrix\Main\EventManager;
use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\DTO\V3\Requests\LineRequestCollection;
use Mindbox\DTO\V3\Requests\LineRequestDTO;
use Mindbox\DTO\V3\Requests\OrderCreateRequestDTO;
use Mindbox\DTO\V3\Requests\ProductRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

EventManager::getInstance()->addEventHandler(
    'sale',
    'OnSaleOrderSaved',
    static function (Event $event) {
        /** @var \Bitrix\Sale\Order $saleOrder */
        $saleOrder = $event->getParameter('ENTITY');
        if (!$saleOrder instanceof \Bitrix\Sale\Order) {
            return;
        }

        if (!$event->getParameter('IS_NEW')) {
            return;
        }

        $orderDto = new OrderCreateRequestDTO();
        $orderDto->setId('bitrixId', (string)$saleOrder->getId());

        $customer = new CustomerRequestDTO();
        $userId = (int)$saleOrder->getUserId();
        if ($userId > 0) {
            $customer->setId('bitrixId', (string)$userId);
        }
        // Для гостя добавьте по ТЗ: email, мобильный телефон и т.д.
        $orderDto->setCustomer($customer);

        $lines = [];
        $basket = $saleOrder->getBasket();
        foreach ($basket as $basketItem) {
            $line = new LineRequestDTO();
            $product = new ProductRequestDTO();
            $product->setId('productId', (string)$basketItem->getProductId());
            $name = $basketItem->getField('NAME');
            $product->setName($name !== null && $name !== '' ? $name : ('#' . $basketItem->getProductId()));
            $line->setProduct($product);
            $line->setQuantity($basketItem->getQuantity());

            $product->setPrice((float)$basketItem->getPrice());

            $lines[] = $line;
        }

        $orderDto->setLines(new LineRequestCollection($lines));

        try {
            $mindboxOrder = getMindboxClient()->order();
            if ((int)$saleOrder->getUserId() > 0) {
                $mindboxOrder
                    ->createAuthorizedOrder($orderDto, 'Website.CreateAuthorizedOrder')
                    ->sendRequest();
            } else {
                $mindboxOrder
                    ->createUnauthorizedOrder($orderDto, 'Website.CreateUnauthorizedOrder')
                    ->sendRequest();
            }
        } catch (MindboxClientException $e) {
            // Логирование: $e->getMessage(), ID заказа
        }
    }
);
```

Цена в заказе указывается на `ProductRequestDTO::setPrice()` (цена за единицу товара внутри строки заказа). Это отличается от корзины, где используется `ProductListItemRequestDTO::setPricePerItem()` — на уровне позиции списка.

Итоговая сумма, скидки, доставка и оплата в примере не заполняются — добавьте по контракту операции Mindbox (`setDeliveryCost`, `setPayments`, `setDiscounts` и т.д.).

---

## Краткий фрагмент только вызова Mindbox

```php
$order = new \Mindbox\DTO\V3\Requests\OrderCreateRequestDTO();
$order->setId('bitrixId', (string)$arOrder['ID']);

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setId('bitrixId', (string)$arOrder['USER_ID']);
$order->setCustomer($customer);

$lines = [];
foreach ($arOrder['BASKET'] as $item) {
    $line = new \Mindbox\DTO\V3\Requests\LineRequestDTO();
    $product = new \Mindbox\DTO\V3\Requests\ProductRequestDTO();
    $product->setId('productId', (string)$item['PRODUCT_ID']);
    $product->setName($item['NAME']);
    $product->setPrice((float)$item['PRICE']);
    $line->setProduct($product);
    $line->setQuantity($item['QUANTITY']);
    $lines[] = $line;
}
$order->setLines(new \Mindbox\DTO\V3\Requests\LineRequestCollection($lines));

try {
    $response = getMindboxClient()
        ->order()
        ->createAuthorizedOrder($order, 'Website.CreateAuthorizedOrder')
        ->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    // Логирование ошибки
}
```

**Гость** — тот же `OrderCreateRequestDTO`, но клиент без `bitrixId`, вызов `createUnauthorizedOrder`:

```php
$order = new \Mindbox\DTO\V3\Requests\OrderCreateRequestDTO();
$order->setId('bitrixId', (string)$orderId);

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail($guestEmail);
// при необходимости: $customer->setMobilePhone(...);
$order->setCustomer($customer);

$order->setLines(new \Mindbox\DTO\V3\Requests\LineRequestCollection($lines));

try {
    $response = getMindboxClient()
        ->order()
        ->createUnauthorizedOrder($order, 'Website.CreateUnauthorizedOrder')
        ->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    // Логирование ошибки
}
```

`$arOrder['BASKET']` в Битрикс обычно **нет** в таком виде — строки берут из `**Sale\Order::getBasket()`**, как в полном примере выше.

---

## Пример: проверка `PriceHasBeenChanged` и повторы при 5xx

Фрагмент без привязки к событию Битрикс: соберите `$orderDto` так же, как в примерах выше. Статус операции сверяйте с документацией Mindbox для вашей операции. Для гостя подставьте `**Website.CreateUnauthorizedOrder**` и вызов `**createUnauthorizedOrder**` вместо авторизованного варианта.

```php
<?php

use Mindbox\DTO\V3\Requests\OrderCreateRequestDTO;
use Mindbox\Exceptions\MindboxUnavailableException;
use Mindbox\Exceptions\MindboxClientException;

/** @var OrderCreateRequestDTO $orderDto */

$operationName = 'Website.CreateAuthorizedOrder';
$maxAttempts   = 4;
$retryDelaySec = 5;

$response = null;

for ($attempt = 1; $attempt <= $maxAttempts; $attempt++) {
    try {
        $orderClient = getMindboxClient()->order();
        $response    = $orderClient->createAuthorizedOrder($orderDto, $operationName)->sendRequest();
        // Для гостя: $operationName = 'Website.CreateUnauthorizedOrder';
        // $response = $orderClient->createUnauthorizedOrder($orderDto, $operationName)->sendRequest();

        $status = $response->getMindboxStatus();
        if ($status === 'PriceHasBeenChanged') {
            // Сообщение пользователю + пересчёт корзины (CalculateAuthorizedCart), не продолжать как успешное создание в Mindbox.
            break;
        }

        // Успешный сценарий (статус не PriceHasBeenChanged — уточните ожидаемое значение, например Success).
        break;
    } catch (MindboxUnavailableException $e) {
        if ($attempt >= $maxAttempts) {
            // Обработка без процессинга Mindbox: завершить сценарий в Битрикс, залогировать $e->getMessage().
            break;
        }
        sleep($retryDelaySec);
    } catch (MindboxClientException $e) {
        // Ошибки 4xx и прочие — по правилам проекта (обычно без повторов как для 5xx).
        throw $e;
    }
}
```

---

## Ошибки и отладка

- Идемпотентность: не создавайте дубликаты в Mindbox при повторном `OnSaleOrderSaved`.
- Поведение при `**PriceHasBeenChanged**` и **5xx** — см. раздел **«Рекомендации»** выше.
- См. [OrderHelper в общих примерах SDK](../examples/order_helper.md), [исключения SDK](../examples/exceptions.md).

