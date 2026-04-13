# Создание заказа (CreateAuthorizedOrder)

После сохранения заказа в Битрикс вызывается операция **CreateAuthorizedOrder** в Mindbox (имя операции в проекте — **уточните у менеджера**).

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`).

---

## Параметры интеграции

| Параметр | Значение |
|----------|----------|
| Операция Mindbox | `Website.CreateAuthorizedOrder` |
| DeviceUUID | Да — в `createAuthorizedOrder` запрос к API v3 формируется **с DeviceUUID** (реализация в SDK) |
| Синхронность | **Асинхронно** (`isSync: false`) — задаётся внутри `OrderHelper::createAuthorizedOrder()`, отдельного параметра нет |
| Точка интеграции Битрикс | Обработчик **`sale:OnSaleOrderSaved`** (при необходимости отфильтруйте только **новый** заказ / первое сохранение — по правилам проекта) |
| Хелпер SDK | `$mindbox->order()->createAuthorizedOrder($order, $operationName)` — **два** аргумента |

Сигнатура в коде:

```php
public function createAuthorizedOrder(OrderCreateRequestDTO $order, $operationName)
```

---

## Передаваемые данные заказа

| Поле | Описание |
|------|----------|
| `orderId` | Внешний ID заказа — `OrderCreateRequestDTO::setId('bitrixId', …)` (или другое имя внешнего id по договорённости с Mindbox) |
| `customer` | Покупатель — `CustomerRequestDTO`: email, телефон, `bitrixId` и др. |
| `lines` | Состав — `LineRequestCollection` из `LineRequestDTO` (товар, количество, цены — по полям операции) |
| `totalPrice` | Итог — при необходимости через поля операции / `customFields` (в базовом `OrderCreateRequestDTO` отдельного `setTotalPrice` может не быть — уточните у менеджера) |
| `discountAmount` | Скидки — `setDiscounts` / поля операции |
| `deliveryType` | Доставка — например `setDeliveryCost`, кастомные поля |
| `paymentType` | Оплата — `setPayments` (`PaymentRequestCollection`) |

Конкретный набор полей зависит от настройки операции в Mindbox.

---

## Событие

Модуль **`sale`**, событие **`OnSaleOrderSaved`**. В обработчик передаётся **`Main\Event`**; объект заказа обычно доступен как **`$event->getParameter('ENTITY')`** (`\Bitrix\Sale\Order`). Уточните имя параметра в [документации событий sale](https://dev.1c-bitrix.ru/api_d7/bitrix/sale/) для вашей версии.

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
        $customer->setId('bitrixId', (string)$saleOrder->getUserId());
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
            getMindboxClient()
                ->order()
                ->createAuthorizedOrder($orderDto, 'Website.CreateAuthorizedOrder')
                ->sendRequest();
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

`$arOrder['BASKET']` в Битрикс обычно **нет** в таком виде — строки берут из **`Sale\Order::getBasket()`**, как в полном примере выше.

---

## Ошибки и отладка

- Идемпотентность: не создавайте дубликаты в Mindbox при повторном `OnSaleOrderSaved`.
- См. [OrderHelper в общих примерах SDK](../examples/order_helper.md), [исключения SDK](../examples/exceptions.md).
