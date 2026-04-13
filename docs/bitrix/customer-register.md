# Регистрация клиента (Битрикс + Mindbox)

После успешной регистрации пользователя в Битрикс вызывается операция Mindbox (например `Website.RegisterCustomer` — имя **уточните у менеджера** под ваш проект).

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`).

---

## Событие

Обычно используют `main:OnAfterUserRegister`. В обработчик передаётся `&$arFields`; после создания пользователя в массиве есть `USER_ID`.

---

## Полный пример

Ниже — тело обработчика (можно вставить в `local/php_interface/include/mindbox.php` после `getMindboxClient()` или вынести в отдельный файл и подключить `require`).

Имя операции `Website.RegisterCustomer`, флаги `register(..., true, false)` (DeviceUUID в запросе, **асинхронный** вызов v3) — приведены как в типовой схеме; подставьте значения из вашей интеграции.

```php
<?php

use Bitrix\Main\EventManager;
use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

EventManager::getInstance()->addEventHandler(
    'main',
    'OnAfterUserRegister',
    static function (&$arFields) {
        $userId = (int)($arFields['USER_ID'] ?? 0);
        if ($userId <= 0) {
            return;
        }

        $rsUser = \CUser::GetByID($userId);
        $arUser = $rsUser->Fetch();
        if (!$arUser) {
            return;
        }

        $customer = new CustomerRequestDTO();

        if (!empty($arUser['EMAIL'])) {
            $customer->setEmail($arUser['EMAIL']);
        }

        if (!empty($arUser['PERSONAL_PHONE'])) {
            $phone = preg_replace('/\D+/', '', $arUser['PERSONAL_PHONE']);
            if ($phone !== '') {
                $customer->setMobilePhone($phone);
            }
        }

        if (!empty($arUser['NAME'])) {
            $customer->setFirstName($arUser['NAME']);
        }

        if (!empty($arUser['LAST_NAME'])) {
            $customer->setLastName($arUser['LAST_NAME']);
        }

        $customer->setId('bitrixId', (string)$arUser['ID']);

        try {
            getMindboxClient()
                ->customer()
                ->register($customer, 'Website.RegisterCustomer', true, false)
                ->sendRequest();
        } catch (MindboxClientException $e) {
            // Логирование: $e->getMessage(), контекст user id
        }
    }
);
```

---

## Параметры `register()`

Сигнатура хелпера: `register(CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true, $isSync = true)`.

- **`$addDeviceUUID`** — передавать ли DeviceUUID в запросе (`true` / `false` по правилам проекта).
- **`$isSync`** — `true` (по умолчанию): синхронный запрос к API v3, `false`: асинхронный. В примере выше явно передаётся `false` — без этого вызов будет синхронным.

---

## Ошибки и отладка

- Перехват `MindboxClientException` и запись в лог (без утечки ПДн в публичные ответы).
- Сверка тела запроса с [документацией Mindbox](https://developers.mindbox.ru/docs/v3).
- Дополнительные сценарии: [CustomerHelper в общих примерах SDK](../examples/customer_helper.md).
