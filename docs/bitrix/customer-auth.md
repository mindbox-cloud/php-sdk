# Авторизация клиента (Битрикс + Mindbox)

После успешного входа пользователя в Битрикс вызывается операция **AuthorizeCustomer** в Mindbox (имя операции в проекте — **уточните у менеджера**).

Событие авторизации позволяет Mindbox **склеить анонимный профиль (DeviceUUID)** с известным клиентом и далее персонализировать коммуникации.

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`).

---

## Параметры интеграции


| Параметр                 | Значение                                  |
| ------------------------ | ----------------------------------------- |
| Операция Mindbox         | `Website.AuthorizeCustomer`               |
| DeviceUUID               | Да (`addDeviceUUID: true`)                |
| Синхронность             | Асинхронно (`isSync: false`)              |
| Точка интеграции Битрикс | Обработчик события `OnAfterUserAuthorize` |
| Хелпер SDK               | `$mindbox->customer()->authorize(...)`    |


---

## Событие

Используют **`main:OnAfterUserAuthorize`**. В обработчик передаётся массив полей пользователя `$arUser`; для идентификации используйте `ID` (при необходимости дозагрузите профиль через `CUser::GetByID`).

---

## Полный пример

Ниже — регистрация обработчика (вставьте в `local/php_interface/include/mindbox.php` после блока регистрации или в отдельный подключаемый файл).

Имя операции `Website.AuthorizeCustomer`, вызов `authorize(..., true, false)` — DeviceUUID в запросе, **асинхронный** вызов v3; подставьте значения из вашей интеграции.

```php
<?php

use Bitrix\Main\EventManager;
use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

EventManager::getInstance()->addEventHandler(
    'main',
    'OnAfterUserAuthorize',
    static function ($arUser) {
        $userId = (int)($arUser['ID'] ?? 0);
        if ($userId <= 0) {
            return;
        }

        $rsUser = \CUser::GetByID($userId);
        $userData = $rsUser->Fetch();
        if (!$userData) {
            return;
        }

        $customer = new CustomerRequestDTO();

        if (!empty($userData['EMAIL'])) {
            $customer->setEmail($userData['EMAIL']);
        }

        $customer->setId('bitrixId', (string)$userData['ID']);

        try {
            getMindboxClient()
                ->customer()
                ->authorize($customer, 'Website.AuthorizeCustomer', true, false)
                ->sendRequest();
        } catch (MindboxClientException $e) {
            // Логирование: $e->getMessage(), контекст user id
        }
    }
);
```

Краткий фрагмент только вызова Mindbox (без события Битрикс):

```php
$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail($arUser['EMAIL']);
$customer->setId('bitrixId', (string)$arUser['ID']);

try {
    $response = getMindboxClient()
        ->customer()
        ->authorize($customer, 'Website.AuthorizeCustomer', true, false)
        ->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    // Логирование ошибки
}
```

---

## Параметры `authorize()`

Сигнатура хелпера: `authorize(CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true, $isSync = false)`.

- **`$addDeviceUUID`** — передавать ли DeviceUUID в запросе (для склейки с анонимным профилем обычно `true`).
- **`$isSync`** — `false` (по умолчанию): асинхронный запрос к API v3, `true`: синхронный.

---

## Ошибки и отладка

- Ошибка Mindbox при авторизации **не обязана** блокировать вход в Битрикс — правило логирования и влияния на UX задайте в проекте.
- Перехват `MindboxClientException` и запись в лог (без утечки ПДн).
- См. [исключения SDK](../examples/exceptions.md), [CustomerHelper в общих примерах](../examples/customer_helper.md).

