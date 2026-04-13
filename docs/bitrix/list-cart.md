# Установка состава корзины (Битрикс + Mindbox)

При изменении корзины в Битрикс вызывается операция установки списка (**SetCart**). Mindbox **полностью подменяет** сохранённый ранее состав корзины переданным набором позиций.

Имя операции в проекте — **уточните у менеджера** (ниже — пример `Website.SetCart`).

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`).

---

## Параметры интеграции


| Параметр                 | Значение                                                                                                                         |
| ------------------------ | -------------------------------------------------------------------------------------------------------------------------------- |
| Операция Mindbox         | `Website.SetCart`                                                                                                                |
| DeviceUUID               | Да (`addDeviceUUID: true`)                                                                                                       |
| Синхронность             | Запрос формируется **асинхронно** — в `ProductListHelper::setProductList()` отдельного аргумента `isSync` нет, режим зашит в SDK |
| Точка интеграции Битрикс | `OnSaleBasketSaved` и/или AJAX-обработчик после изменения корзины                                                                |
| Хелпер SDK               | `ProductListHelper::setProductList(...)`                                                                                         |


При каждом изменении корзины (добавление, удаление, количество) отправляйте **полный актуальный** состав позиций.

---

## Передаваемые данные по товару


| Поле        | Описание                                                                                                                                  |
| ----------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `productId` | Внешний ID товара (часто ID элемента каталога Битрикс) — `ProductRequestDTO::setId('productId', …)`                                       |
| `name`      | Наименование — `ProductRequestDTO::setName()`                                                                                             |
| `count`     | Количество — `ProductListItemRequestDTO::setCount()`                                                                                      |
| `price`     | Цена за единицу — на позиции списка `ProductListItemRequestDTO::setPricePerItem()` (или `setPrice()` — по согласованию с полями операции) |


---

## Событие

Модуль **`sale`**, событие **`OnSaleBasketSaved`**. В обработчик передаётся `Main\Event`; корзина — `$event->getParameter('ENTITY')` (объект `Bitrix\Sale\Basket`). См. [события сохранения корзины](https://dev.1c-bitrix.ru/api_d7/bitrix/sale/events/basket_saved.php).

Ту же логику можно вызвать вручную после `Basket::save()` или из AJAX — без регистрации события.

---

## Полный пример

Вставьте в `local/php_interface/include/mindbox.php` (или отдельный подключаемый файл) рядом с другими обработчиками Mindbox.

Коллекция — `ProductListItemRequestCollection` из массива `ProductListItemRequestDTO`. У каждой строки: вложенный `ProductRequestDTO` (id + имя), `count`, цена за единицу. Для авторизованного пользователя — `CustomerIdentityRequestDTO` с `bitrixId`; для гостя — `null`, если сценарий в Mindbox это допускает.

Имя операции `Website.SetCart`, четвёртый аргумент `setProductList` — `true` (DeviceUUID).

```php
<?php

use Bitrix\Main\Event;
use Bitrix\Main\EventManager;
use Mindbox\DTO\V3\Requests\CustomerIdentityRequestDTO;
use Mindbox\DTO\V3\Requests\ProductListItemRequestCollection;
use Mindbox\DTO\V3\Requests\ProductListItemRequestDTO;
use Mindbox\DTO\V3\Requests\ProductRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

EventManager::getInstance()->addEventHandler(
    'sale',
    'OnSaleBasketSaved',
    static function (Event $event) {
        /** @var \Bitrix\Sale\Basket $basket */
        $basket = $event->getParameter('ENTITY');
        if (!$basket) {
            return;
        }

        $fUserId = $basket->getFUserId();
        $userId  = (int)\Bitrix\Sale\Fuser::getUserIdById($fUserId);

        $items = [];
        foreach ($basket as $basketItem) {
            $line = new ProductListItemRequestDTO();
            $product = new ProductRequestDTO();
            $product->setId('productId', (string)$basketItem->getProductId());
            $name = $basketItem->getField('NAME');
            $product->setName($name !== null && $name !== '' ? $name : ('#' . $basketItem->getProductId()));
            $line->setProduct($product);
            $line->setCount($basketItem->getQuantity());

            $line->setPricePerItem((float)$basketItem->getPrice());

            $items[] = $line;
        }

        $productList = new ProductListItemRequestCollection($items);

        $customerIdentity = null;
        if ($userId > 0) {
            $customerIdentity = new CustomerIdentityRequestDTO();
            $customerIdentity->setId('bitrixId', (string)$userId);
        }

        try {
            getMindboxClient()
                ->productList()
                ->setProductList($productList, 'Website.SetCart', $customerIdentity, true)
                ->sendRequest();
        } catch (MindboxClientException $e) {
            // Логирование: $e->getMessage(), контекст корзины
        }
    }
);
```

Имя поля позиции и способ получения `$userId` уточните под вашу версию `sale`.

---

## Краткий фрагмент только вызова Mindbox

```php
$productList = new \Mindbox\DTO\V3\Requests\ProductListItemRequestCollection(/* массив ProductListItemRequestDTO */);

try {
    $response = getMindboxClient()
        ->productList()
        ->setProductList($productList, 'Website.SetCart', $customerIdentity, true)
        ->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    // Логирование ошибки
}
```

Четвёртый аргумент `setProductList` — `$addDeviceUUID` (`true` / `false`). Отдельного параметра синхронности у метода нет — см. таблицу выше.

---

## Параметры `setProductList()`

Сигнатура: `setProductList(ProductListItemRequestCollection $products, $operationName, CustomerIdentityRequestDTO $customerIdentity = null, $addDeviceUUID = true)`.

- **`$customerIdentity`** — `null`, если клиент идентифицируется только по DeviceUUID (или по правилам операции).
- **`$addDeviceUUID`** — передавать ли DeviceUUID в запросе.

---

## Ошибки и отладка

- Расхождение ID товара Битрикс ↔ Mindbox — проверить маппинг и имя внешнего id (`productId`).
- Большая корзина — следить за размером тела запроса и таймаутами.
- См. [операции со списком продуктов в SDK](../examples/product_list_helper.md).

