# Интеграция Mindbox PHP SDK с Битрикс

Краткая последовательность: установка SDK → конфиг в `.settings.php` → один файл с клиентом Mindbox и регистрацией событий. Дальше — сценарии по операциям в отдельных страницах ниже.

---

## 1. Установить SDK

```sh
composer require mindbox/sdk
```

При необходимости SDK можно скопировать в каталог проекта (в т.ч. в `local`) и подключать тот же `vendor/autoload.php`.

В `local/php_interface/init.php` (или другой общей точке входа) подключите автозагрузчик:

```php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
```

Требования к PHP и расширениям — в [общем гайде по установке](../getting_started.md#системные-зависимости).

---

## 2. Заполнить конфиг

В **`local/.settings.php`** добавьте секцию **`mindbox`** (остальные ключи `return` не удаляйте). Значения `endpointId`, `secretKey` и `domain` выдайте у менеджера Mindbox; `api.s.mindbox` в примере — только иллюстрация.

```php
<?php

return [
    // … другие настройки Битрикс …

    'mindbox' => [
        'value' => [
            'endpointId' => '…',
            'secretKey'  => '…',
            'domain'     => 'api.s.mindbox',
            'domainZone' => 'ru',
        ],
        'readonly' => true,
    ],
];
```

---

## 3. Файл с клиентом и обработчиками событий

Создайте, например, **`local/php_interface/include/mindbox.php`**. В нём — фабрика клиента и ниже пример регистрации в Mindbox при `OnAfterUserRegister` (подробнее и варианты — [регистрация клиента](./customer-register.md)). Второй аргумент `Mindbox` — любой PSR-3-логгер; ниже для простоты используется `MindboxFileLogger` (лог: `/upload/logs/mindbox.log`).

Подключите файл в **`init.php`** после автозагрузчика:

```php
require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/mindbox.php';
```

Пример содержимого `mindbox.php`:

```php
<?php

use Bitrix\Main\Config\Configuration;
use Bitrix\Main\EventManager;
use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\Exceptions\MindboxClientException;
use Mindbox\Mindbox;
use Mindbox\Loggers\MindboxFileLogger;

function getMindboxClient(): Mindbox
{
    static $client = null;

    if ($client === null) {
        $cfg = Configuration::getValue('mindbox');

        $logger = new MindboxFileLogger($_SERVER['DOCUMENT_ROOT'] . '/upload/logs');

        $client = new Mindbox([
            'endpointId' => $cfg['endpointId'],
            'secretKey'  => $cfg['secretKey'],
            'domain'     => $cfg['domain'],
            'domainZone' => $cfg['domainZone'] ?? 'ru',
        ], $logger);
    }

    return $client;
}

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

## Оглавление

### Операции с клиентом


| Документ                                      | Описание                                 |
| --------------------------------------------- | ---------------------------------------- |
| [Регистрация клиента](./customer-register.md) | Создание нового клиента в Mindbox        |
| [Редактирование клиента](./customer-edit.md)  | Обновление данных существующего клиента  |
| [Авторизация клиента](./customer-auth.md)     | Вход и привязка сессии к клиенту Mindbox |
| [Подписка на рассылки](./customer-subscribe.md) | Подписка через форму (SubscriptionInFooter) |


### Списки продуктов


| Документ                                  | Описание                             |
| ----------------------------------------- | ------------------------------------ |
| [Список «Корзина»](./list-cart.md)        | Установка и синхронизация корзины    |
| [Список «Избранное»](./list-favorites.md) | Установка и синхронизация избранного |


### Заказ


| Документ                             | Описание                        |
| ------------------------------------ | ------------------------------- |
| [Создание заказа](./order-create.md) | Оформление заказа через Mindbox |


Точные имена операций Mindbox и поля запросов — у менеджера и в [документации API](https://developers.mindbox.ru/docs/v3).