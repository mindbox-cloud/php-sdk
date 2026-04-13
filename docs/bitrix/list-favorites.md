# Установка списка избранного (SetWishList)

При изменении избранного в Битрикс вызывается операция **SetWishList** в Mindbox. Mindbox **полностью подменяет** сохранённый ранее список избранного переданным набором позиций — **как для [корзины](./list-cart.md)**, но другая операция и метод хелпера.

Имя операции в проекте — **уточните у менеджера** (ниже — пример `Website.SetWishList`).

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`).

В ядре Битрикс **нет единого стандартного события** «избранное изменилось»: подписку через `EventManager` здесь не приводим. Вызов Mindbox вставляйте в **свой** код добавления/удаления в избранное (компонент, AJAX, highload-блок и т.д.).

---

## Параметры интеграции

| Параметр | Значение |
|----------|----------|
| Операция Mindbox | `Website.SetWishList` |
| DeviceUUID | Да (`addDeviceUUID: true`) |
| Синхронность | Запрос формируется **асинхронно** — в `ProductListHelper::setWishList()` отдельного аргумента `isSync` нет, режим зашит в SDK |
| Точка интеграции Битрикс | Обработчик добавления / удаления из избранного (ваш код, не событие ядра) |
| Хелпер SDK | **`ProductListHelper::setWishList(...)`** — тот же состав DTO, что и у корзины, другой метод и имя операции |

По смыслу то же, что **SetCart**: при каждом изменении списка отправляйте **полный актуальный** набор позиций.

---

## Передаваемые данные по товару

Как для корзины: см. таблицу в [корзине](./list-cart.md#передаваемые-данные-по-товару) (`productId`, `name`, `count`, цена за единицу — если операция в Mindbox ожидает цену для строки избранного).

---

## Полный пример

Сборка **`ProductListItemRequestCollection`** — так же, как в [корзине](./list-cart.md). Источник **`$wishlistItems`** зависит от вашей реализации избранного (массив строк с полями вроде `NAME`, `PRODUCT_ID`, `QUANTITY`, `PRICE` — подставьте свои).

```php
<?php

use Mindbox\DTO\V3\Requests\CustomerIdentityRequestDTO;
use Mindbox\DTO\V3\Requests\ProductListItemRequestCollection;
use Mindbox\DTO\V3\Requests\ProductListItemRequestDTO;
use Mindbox\DTO\V3\Requests\ProductRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

// $userId — ID авторизованного пользователя; $wishlistItems — актуальный полный список позиций
$userId = 0;

$items = [];
foreach ($wishlistItems as $item) {
    $line = new ProductListItemRequestDTO();
    $product = new ProductRequestDTO();
    $product->setName($item['NAME']);
    $product->setId('productId', (string)$item['PRODUCT_ID']);
    $line->setProduct($product);
    $line->setCount($item['QUANTITY']);
    $line->setPricePerItem($item['PRICE']);

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
        ->setWishList($productList, 'Website.SetWishList', $customerIdentity, true)
        ->sendRequest();
} catch (MindboxClientException $e) {
    // Логирование ошибки
}
```

---

## Краткий фрагмент только вызова Mindbox

```php
$productList = new \Mindbox\DTO\V3\Requests\ProductListItemRequestCollection(/* массив ProductListItemRequestDTO */);

try {
    $response = getMindboxClient()
        ->productList()
        ->setWishList($productList, 'Website.SetWishList', $customerIdentity, true)
        ->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    // Логирование ошибки
}
```

Четвёртый аргумент — **`$addDeviceUUID`**. Отдельного параметра синхронности у метода нет.

---

## Параметры `setWishList()`

Сигнатура: `setWishList(ProductListItemRequestCollection $products, $operationName, CustomerIdentityRequestDTO $customerIdentity = null, $addDeviceUUID = true)`.

Отличие от корзины: метод **`setWishList`**, операция **`Website.SetWishList`**. У **`setProductList`** (корзина) и **`setWishList`** (избранное) одинаковые аргументы и то же тело операции в API v3 по смыслу «полный список».

---

## Ошибки и отладка

- Те же замечания, что для [корзины](./list-cart.md): маппинг `productId`, размер запроса.
- Гости: если избранное только у авторизованных — не вызывайте Mindbox без `CustomerIdentity` / по правилам проекта.
- См. [операции со списком продуктов в SDK](../examples/product_list_helper.md).
