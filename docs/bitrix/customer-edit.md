# Редактирование профиля (Битрикс + Mindbox)

При обновлении данных пользователя в Битрикс вызывается операция **EditCustomer** в Mindbox (имя операции в проекте — **уточните у менеджера**).

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`).

---

## Параметры интеграции

| Параметр | Значение |
|----------|----------|
| Операция Mindbox | `Website.EditCustomer` |
| DeviceUUID | Да (`addDeviceUUID: true`) |
| Синхронность | Асинхронно (`isSync: false`) |
| Точка интеграции Битрикс | Обработчик события `OnAfterUserUpdate` |
| Хелпер SDK | `$mindbox->customer()->edit(...)` |

---

## Событие

Используют **`main:OnAfterUserUpdate`**. В обработчик передаётся **`&$arFields`** — поля обновляемого пользователя; для актуального профиля в Mindbox удобно после проверки **`ID`** дозагрузить пользователя через **`CUser::GetByID`**.

---

## Полный пример

Вставьте в `local/php_interface/include/mindbox.php` (или отдельный подключаемый файл) рядом с другими обработчиками Mindbox.

Имя операции `Website.EditCustomer`, вызов `edit(..., true, false)` — DeviceUUID в запросе, **асинхронный** вызов v3.

```php
<?php

use Bitrix\Main\EventManager;
use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

EventManager::getInstance()->addEventHandler(
    'main',
    'OnAfterUserUpdate',
    static function (&$arFields) {
        $userId = (int)($arFields['ID'] ?? 0);
        if ($userId <= 0) {
            return;
        }

        $rsUser = \CUser::GetByID($userId);
        $userData = $rsUser->Fetch();
        if (!$userData) {
            return;
        }

        $customer = new CustomerRequestDTO();

        $customer->setId('bitrixId', (string)$userData['ID']);

        if (!empty($userData['EMAIL'])) {
            $customer->setEmail($userData['EMAIL']);
        }

        if (!empty($userData['PERSONAL_PHONE'])) {
            $phone = preg_replace('/\D+/', '', $userData['PERSONAL_PHONE']);
            if ($phone !== '') {
                $customer->setMobilePhone($phone);
            }
        }

        if (!empty($userData['NAME'])) {
            $customer->setFirstName($userData['NAME']);
        }

        if (!empty($userData['LAST_NAME'])) {
            $customer->setLastName($userData['LAST_NAME']);
        }

        try {
            getMindboxClient()
                ->customer()
                ->edit($customer, 'Website.EditCustomer', true, false)
                ->sendRequest();
        } catch (MindboxClientException $e) {
            // Логирование: $e->getMessage(), контекст user id
        }
    }
);
```

Краткий фрагмент только вызова Mindbox:

```php
$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setId('bitrixId', (string)$arUser['ID']);
$customer->setEmail($arUser['EMAIL']);

$phone = preg_replace('/\D+/', '', $arUser['PERSONAL_PHONE']);
if ($phone !== '') {
    $customer->setMobilePhone($phone);
}

$customer->setFirstName($arUser['NAME']);
$customer->setLastName($arUser['LAST_NAME']);

try {
    $response = getMindboxClient()
        ->customer()
        ->edit($customer, 'Website.EditCustomer', true, false)
        ->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    // Логирование ошибки
}
```

---

## Параметры `edit()`

Сигнатура хелпера: `edit(CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true, $isSync = true)`.

- **`$addDeviceUUID`** — передавать ли DeviceUUID в запросе.
- **`$isSync`** — `true` (по умолчанию): синхронный запрос к API v3, `false`: асинхронный. В примере выше явно передаётся `false` — без этого вызов будет синхронным.

---

## Ошибки и отладка

- Логировать исключения Mindbox отдельно от ошибок сохранения в Битрикс.
- Учитывать конфликты данных (дубликаты телефона/email в Mindbox).
- См. [исключения SDK](../examples/exceptions.md), [CustomerHelper в общих примерах](../examples/customer_helper.md).
