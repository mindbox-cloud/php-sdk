# Список заказов потребителя (`GetCustomerOrders`)

Операция `**Website.GetCustomerOrders**` возвращает список заказов клиента из Mindbox (пагинация через query-параметры запроса).

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`).

---

## Параметры интеграции


| Параметр         | Значение                                                                                                                                                   |
| ---------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Операция Mindbox | `Website.GetCustomerOrders` (имя **уточните у менеджера**)                                                                                                 |
| Хелпер SDK       | `getMindboxClient()->order()->getOrders($countToReturn, $mindbox, $startingIndex, $operationName)`                                                         |
| `countToReturn`  | Максимальное число заказов в ответе                                                                                                                        |
| `mindbox`        | **Идентификатор потребителя в Mindbox** (строка; обычно внутренний `mindboxId`, который вы храните у пользователя Битрикс после регистрации/синхронизации) |
| `startingIndex`  | Порядковый номер заказа, **с которого** формируется страница списка (см. документацию API)                                                                 |
| DeviceUUID       | В реализации SDK для этого метода **не передаётся** (`addDeviceUUID: false`)                                                                               |
| Ответ SDK        | `MindboxOrdersResponse`                                                                                                                                    |
| Синхронность     | **Синхронно** (`isSync: true`)                                                                                                                             |


Документация Mindbox: [получение списка заказов потребителя](https://developers.mindbox.ru/docs/получение-списка-заказов-потребителя).

Сигнатура:

```php
public function getOrders($countToReturn, $mindbox, $startingIndex, $operationName)
```

---

## Пример кода

`$mindboxCustomerId` должен соответствовать тому id, который Mindbox ожидает в параметре `mindbox` (часто это значение из ответа регистрации/проверки клиента или поле профиля в Битрикс).

```php
<?php

use Mindbox\Exceptions\MindboxClientException;

$countToReturn = 10;
$mindboxCustomerId = (string)$mindboxIdFromProfile;
$startingIndex   = 1;

try {
    $response = getMindboxClient()
        ->order()
        ->getOrders(
            $countToReturn,
            $mindboxCustomerId,
            $startingIndex,
            'Website.GetCustomerOrders'
        )
        ->sendRequest();
} catch (MindboxClientException $e) {
    // Логирование
}
```

Если `**mindboxId**` у пользователя ещё нет, сначала выполните идентификацию/регистрацию в Mindbox — см. [регистрация](./customer-register.md), [проверка клиента](./customer-check.md).

---

## Ошибки и отладка

- См. [OrderHelper в общих примерах SDK](../examples/order_helper.md), [исключения SDK](../examples/exceptions.md).

