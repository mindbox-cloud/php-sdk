# Расчёт корзины (preorder) (Битрикс + Mindbox)

Запрос предварительного расчёта корзины в Mindbox: скидки, промо, итог до оформления заказа. В SDK это методы `**OrderHelper**` с телом `**PreorderRequestDTO**`.

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`). Состав корзины в Mindbox для других сценариев может синхронизироваться отдельно — см. [установка корзины](./list-cart.md).

Точку вызова в Битрикс выбирайте сами: компонент оформления, AJAX при изменении корзины, шаг checkout и т.д. Ниже — только фрагменты вызова SDK, без регистрации обработчиков событий.

---

## Рекомендации

- **Скидки на сайте и Mindbox.** Если на витрине уже действуют **собственные** скидки (правила Битрикс, каталог, промокоды сайта и т.п.), **сначала** примените их к позициям и ценам **на своей стороне**, **затем** передайте актуальный состав и цены в `**CalculateAuthorizedCart`** (или другую операцию расчёта из вашего проекта), чтобы Mindbox выполнил **итоговый** расчёт персональных акций и промо поверх уже учтённых скидок. Иначе расчёт в Mindbox может не совпасть с тем, что видит пользователь до запроса.
- **Задержка и UX.** Один запрос расчёта обычно занимает порядка **200–300 мс**. Имеет смысл **не блокировать** отрисовку корзины и чекаута: сначала показать **базовые** цены (или последний известный итог), а вызов Mindbox выполнить **асинхронно** с точки зрения интерфейса — например, отдельным **AJAX** к вашему PHP-обработчику, который внутри вызывает SDK; по ответу обновить суммы и персональные скидки. На сервере вызов `OrderHelper` остаётся обычным синхронным HTTP к API Mindbox.

---

## Операции и хелпер

Имена `**Website.*`** — примеры; **уточните у менеджера Mindbox** для вашего endpoint.


| Операция Mindbox (пример)           | Хелпер SDK                                          | DeviceUUID в запросе (как в SDK) |
| ----------------------------------- | --------------------------------------------------- | -------------------------------- |
| `Website.CalculateCart`             | `calculateCart($order, $operationName)`             | Нет (`false`)                    |
| `Website.CalculateAuthorizedCart`   | `calculateAuthorizedCart($order, $operationName)`   | Да (`true`)                      |
| `Website.CalculateUnauthorizedCart` | `calculateUnauthorizedCart($order, $operationName)` | Да (`true`)                      |


Все три метода отправляют запрос **синхронно** (режим зашит в `OrderHelper`). Ответ ожидается как `**MindboxOrderResponse`**.

Документация Mindbox: [предварительный расчёт (preorder)](https://developers.mindbox.ru/docs/preorderxml), [processing calculate](https://developers.mindbox.ru/docs/processing-calculate).

---

## Входные данные

`PreorderRequestDTO` наследует поля заказа: как минимум `**customer**` (`CustomerRequestDTO`) и `**lines**` (`LineRequestCollection` из `LineRequestDTO`) — полный набор полей зависит от операции в проекте. При необходимости используйте `**setCalculationDateTimeUtc()**` и другие поля из [общих примеров SDK](../examples/order_helper.md).

---

## Пример: неавторизованный расчёт (`CalculateCart`)

```php
<?php

use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\DTO\V3\Requests\LineRequestCollection;
use Mindbox\DTO\V3\Requests\LineRequestDTO;
use Mindbox\DTO\V3\Requests\PreorderRequestDTO;
use Mindbox\DTO\V3\Requests\ProductRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

$customer = new CustomerRequestDTO();
$customer->setEmail('guest@example.com');

$line = new LineRequestDTO();
$product = new ProductRequestDTO();
$product->setId('productId', '12345');
$product->setName('Товар');
$product->setPrice(1000.0);
$line->setProduct($product);
$line->setQuantity(2);

$order = new PreorderRequestDTO();
$order->setCustomer($customer);
$order->setLines(new LineRequestCollection([$line]));

try {
    $response = getMindboxClient()
        ->order()
        ->calculateCart($order, 'Website.CalculateCart')
        ->sendRequest();
} catch (MindboxClientException $e) {
    // Логирование
}
```

---

## Пример: расчёт для авторизованного пользователя (`CalculateAuthorizedCart`)

```php
<?php

use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\DTO\V3\Requests\LineRequestCollection;
use Mindbox\DTO\V3\Requests\LineRequestDTO;
use Mindbox\DTO\V3\Requests\PreorderRequestDTO;
use Mindbox\DTO\V3\Requests\ProductRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

$customer = new CustomerRequestDTO();
$customer->setId('bitrixId', (string)$userId);
$customer->setEmail($userEmail);

$line = new LineRequestDTO();
$product = new ProductRequestDTO();
$product->setId('productId', '12345');
$product->setName('Товар');
$product->setPrice(1000.0);
$line->setProduct($product);
$line->setQuantity(2);

$order = new PreorderRequestDTO();
$order->setCustomer($customer);
$order->setLines(new LineRequestCollection([$line]));

try {
    $response = getMindboxClient()
        ->order()
        ->calculateAuthorizedCart($order, 'Website.CalculateAuthorizedCart')
        ->sendRequest();
} catch (MindboxClientException $e) {
    // Логирование
}
```

---

## Пример: расчёт без авторизации с DeviceUUID (`CalculateUnauthorizedCart`)

Используется, когда в проекте задействована операция `**Website.CalculateUnauthorizedCart**` (аналогично авторизованному по составу DTO, идентификация клиента — по правилам операции и DeviceUUID в SDK).

```php
<?php

use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\DTO\V3\Requests\LineRequestCollection;
use Mindbox\DTO\V3\Requests\LineRequestDTO;
use Mindbox\DTO\V3\Requests\PreorderRequestDTO;
use Mindbox\DTO\V3\Requests\ProductRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

$customer = new CustomerRequestDTO();
$customer->setEmail('guest@example.com');

$line = new LineRequestDTO();
$product = new ProductRequestDTO();
$product->setId('productId', '12345');
$product->setName('Товар');
$product->setPrice(1000.0);
$line->setProduct($product);
$line->setQuantity(1);

$order = new PreorderRequestDTO();
$order->setCustomer($customer);
$order->setLines(new LineRequestCollection([$line]));

try {
    $response = getMindboxClient()
        ->order()
        ->calculateUnauthorizedCart($order, 'Website.CalculateUnauthorizedCart')
        ->sendRequest();
} catch (MindboxClientException $e) {
    // Логирование
}
```

---

## Ошибки и отладка

- Сверка XML/JSON тела с контрактом операции в кабинете Mindbox.
- Несовпадение внешних id товаров с [установкой корзины](./list-cart.md) — везде используйте согласованный `productId`.
- Дополнительные сценарии процессинга: [OrderHelper в общих примерах](../examples/order_helper.md).

