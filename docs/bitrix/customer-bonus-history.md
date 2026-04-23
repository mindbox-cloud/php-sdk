# История изменений бонусного баланса (`GetCustomerBonusPointsHistory`)

Операция `**Website.GetCustomerBonusPointsHistory**` возвращает историю начислений и списаний баллов лояльности для потребителя в Mindbox.

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`).

---

## Параметры интеграции


| Параметр         | Значение                                                                                                  |
| ---------------- | --------------------------------------------------------------------------------------------------------- |
| Операция Mindbox | `Website.GetCustomerBonusPointsHistory` (имя **уточните у менеджера**)                                    |
| Хелпер SDK       | `getMindboxClient()->customer()->getBonusPointsHistory($customer, $page, $operationName, $addDeviceUUID)` |
| Вход             | `CustomerRequestDTO` (идентификация клиента), `PageRequestDTO` (пагинация)                                |
| Ответ SDK        | `MindboxBonusPointsResponse`                                                                              |
| Синхронность     | **Синхронно** (`isSync: true`), параметр задаётся внутри `CustomerHelper`                                 |


Документация Mindbox: [получение истории изменений баланса](https://developers.mindbox.ru/docs/получение-истории-изменений-баланса-потребителя).

Сигнатура:

```php
public function getBonusPointsHistory(
    CustomerRequestDTO $customer,
    PageRequestDTO $page,
    $operationName,
    $addDeviceUUID = true
)
```

---

## Пример кода

Идентификация клиента — как в других сценариях: например `setId('mindboxId', …)` или `setId('bitrixId', …)` по договорённости с проектом Mindbox.

```php
<?php

use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\DTO\V3\Requests\PageRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

$customer = new CustomerRequestDTO();
$customer->setId('bitrixId', (string)$userId);

$page = new PageRequestDTO();
$page->setItemsPerPage(10);
$page->setPageNumber(1);

try {
    $response = getMindboxClient()
        ->customer()
        ->getBonusPointsHistory(
            $customer,
            $page,
            'Website.GetCustomerBonusPointsHistory',
            true
        )
        ->sendRequest();
} catch (MindboxClientException $e) {
    // Логирование
}
```

При необходимости задайте в `PageRequestDTO` фильтр по датам: `setSinceDateTimeUtc()`, `setTillDateTimeUtc()` — по контракту операции.

---

## Ошибки и отладка

- См. [CustomerHelper в общих примерах SDK](../examples/customer_helper.md), [исключения SDK](../examples/exceptions.md).

