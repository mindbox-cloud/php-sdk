# Проверка клиента в Mindbox (Битрикс + Mindbox)

Операции **Check** запрашивают у Mindbox данные потребителя по идентификатору (email, телефон или универсальная проверка). Точное поведение (найден / не найден, состав полей в ответе) задаётся **операцией в проекте Mindbox** и сценарием на стороне Mindbox.

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`).

---

## Параметры интеграции (типовые)

Имена операций ниже — **стандартные примеры**; финальные строки (`Website.*`) **уточните у менеджера Mindbox** под ваш endpoint.


| Операция Mindbox (пример)            | Хелпер SDK (`$mindbox->customer()->…`) | Идентификация в `CustomerRequestDTO`                                                                                                                      |
| ------------------------------------ | -------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `Website.CheckCustomer`              | `checkCustomer(...)`                   | Заполните поля по [документации операции](https://developers.mindbox.ru/docs/получение-данных-потребителя) (часто email и/или телефон, внешние id и т.д.) |
| `Website.CheckCustomerByMobilePhone` | `checkByPhone(...)`                    | `setMobilePhone()` (обычно только цифры)                                                                                                                  |
| `Website.CheckCustomerByEmail`       | `checkByMail(...)`                     | `setEmail()`                                                                                                                                              |


**Ответ SDK:** для всех трёх методов клиент ожидает `MindboxCustomerResponse` — после `sendRequest()` можно вызвать `$response->getCustomer()` (`CustomerResponseDTO|null`) и при необходимости `$response->getDiscountCards()`.

**Синхронность:** в текущей версии SDK эти три метода вызывают API **только синхронно** (`prepareRequest` с фиксированным синхронным режимом). Учитывайте задержку HTTP при вызове из событий Битрикс.

---

## События Битрикс и собственные обработчики

Типовые точки, где нужна проверка «есть ли клиент в Mindbox» **до** создания пользователя в Битрикс:


| Точка                                     | Документация                                                                                   |
| ----------------------------------------- | ---------------------------------------------------------------------------------------------- |
| До добавления пользователя (`CUser::Add`) | [OnBeforeUserAdd](https://dev.1c-bitrix.ru/api_help/main/events/onbeforeuseradd.php)           |
| До регистрации (`CUser::Register`)        | [OnBeforeUserRegister](https://dev.1c-bitrix.ru/api_help/main/events/onbeforeuserregister.php) |


По документации Битрикс, чтобы **отменить** добавление/регистрацию, в обработчике нужно вызвать `$APPLICATION->ThrowException('...')` и **вернуть `false`**.

Альтернатива — не вешаться на события ядра, а вызывать проверку из **своего контроллера, AJAX или компонента** (например, перед отправкой формы регистрации): так проще управлять UX и таймаутами.

---

## Полный пример: `OnBeforeUserRegister` + проверка по email

Ниже — проверка через `Website.CheckCustomerByEmail`. Если в ответе есть клиент, регистрация отменяется с сообщением пользователю. Политику при `MindboxClientException` (блокировать или пропускать) задайте в проекте.

```php
<?php

use Bitrix\Main\EventManager;
use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

EventManager::getInstance()->addEventHandler(
    'main',
    'OnBeforeUserRegister',
    static function (&$arFields) {
        $email = trim((string)($arFields['EMAIL'] ?? ''));
        if ($email === '') {
            return;
        }

        $customer = new CustomerRequestDTO();
        $customer->setEmail($email);

        try {
            $response = getMindboxClient()
                ->customer()
                ->checkByMail($customer, 'Website.CheckCustomerByEmail', true)
                ->sendRequest();

            if ($response->getCustomer() !== null) {
                global $APPLICATION;
                $APPLICATION->ThrowException('Указанный e-mail уже участвует в программе. Войдите или восстановите доступ.');
                return false;
            }
        } catch (MindboxClientException $e) {
            // Пример: не блокируем регистрацию при недоступности Mindbox; иначе — ThrowException + return false
        }
    }
);
```

---

## Фрагмент: проверка по телефону

Используйте `**checkByPhone**` и операцию `**Website.CheckCustomerByMobilePhone**`. (Для проверки по email — метод `**checkByMail**`: в SDK он назван с `Mail`, не `Email`.)

```php
$customer = new CustomerRequestDTO();
$phone = preg_replace('/\D+/', '', $rawPhone);
if ($phone === '') {
    return;
}
$customer->setMobilePhone($phone);

$response = getMindboxClient()
    ->customer()
    ->checkByPhone($customer, 'Website.CheckCustomerByMobilePhone', true)
    ->sendRequest();

$mindboxCustomer = $response->getCustomer();
```

---

## Фрагмент: универсальная операция `Website.CheckCustomer`

Имя операции передаётся вторым аргументом; набор полей в `CustomerRequestDTO` должен соответствовать вашему сценарию Mindbox.

```php
$customer = new CustomerRequestDTO();
$customer->setEmail($email);
// при необходимости: $customer->setMobilePhone($phone);
// $customer->setId('bitrixId', (string)$bitrixUserId);

$response = getMindboxClient()
    ->customer()
    ->checkCustomer($customer, 'Website.CheckCustomer', true)
    ->sendRequest();
```

---

## Сигнатуры хелпера

Все три метода имеют одинаковые параметры после DTO:

- `checkCustomer(CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)`
- `checkByPhone(CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)`
- `checkByMail(CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)`

`**$addDeviceUUID**` — передавать ли DeviceUUID в запросе (`true` / `false` по правилам проекта).

---

## Ошибки и отладка

- Перехват `MindboxClientException`, логирование без утечки ПДн в публичные ответы.
- Сверка тела запроса и семантики ответа с [документацией Mindbox](https://developers.mindbox.ru/docs/v3) и описанием операции у менеджера.
- Дополнительные сценарии: [CustomerHelper в общих примерах SDK](../examples/customer_helper.md).

