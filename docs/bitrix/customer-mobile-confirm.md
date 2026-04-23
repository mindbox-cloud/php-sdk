# Подтверждение мобильного телефона (Битрикс + Mindbox)

Документ покрывает операции `**Website.ConfirmMobilePhone**` и `**Website.ResendMobilePhoneConfirmationCode**` из типового ТЗ: ввод кода из SMS и повторная отправка SMS.

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`). Первичная отправка SMS **не** вызывается этими двумя операциями — она выполняется сценарием Mindbox раньше (например, после [регистрации](./customer-register.md) или после передачи нового номера при [редактировании](./customer-edit.md) клиента).

---

## Сводка по операциям


| Операция Mindbox                            | Хелпер SDK                    | Ответ SDK                                 | Синхронность (по умолчанию в хелпере) |
| ------------------------------------------- | ----------------------------- | ----------------------------------------- | ------------------------------------- |
| `Website.ConfirmMobilePhone`                | `confirmMobile(...)`          | `MindboxSmsConfirmationResponse`          | Синхронно (`$isSync = true`)          |
| `Website.ResendMobilePhoneConfirmationCode` | `resendConfirmationCode(...)` | `MindboxCustomerProcessingStatusResponse` | Синхронно (`$isSync = true`)          |


Имена операций `**Website.`*** в проекте могут отличаться — **уточните у менеджера Mindbox**.

---

## Входные данные

### `ConfirmMobilePhone`

- **Идентификация клиента** — через `CustomerRequestDTO` так же, как в других вызовах (например `setId('mindboxId', …)`, `setId('bitrixId', …)` — набор id зависит от вашей интеграции).
- **Код из SMS** — объект `SmsConfirmationRequestDTO`, поле кода: `setCode(...)`.

### `ResendMobilePhoneConfirmationCode`

- **Идентификация клиента** — достаточно `CustomerRequestDTO` с теми же идентификаторами, по которым Mindbox понимает, кому переотправить код (в контексте уже начатого подтверждения номера).

Подробнее о полях — в [документации Mindbox](https://developers.mindbox.ru/docs/подтверждение-мобильного-телефона) и [примерах SDK](../examples/customer_helper.md).

---

## Пример: подтверждение номера (`ConfirmMobilePhone`)

Типичная точка вызова — **обработчик формы** или **AJAX** после ввода кода пользователем (не обязательно событие ядра Битрикс).

```php
<?php

use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\DTO\V3\Requests\SmsConfirmationRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

$customer = new CustomerRequestDTO();
$customer->setId('bitrixId', (string)$bitrixUserId);

$smsConfirmation = new SmsConfirmationRequestDTO();
$smsConfirmation->setCode($codeFromUserInput);

try {
    $response = getMindboxClient()
        ->customer()
        ->confirmMobile(
            $customer,
            $smsConfirmation,
            'Website.ConfirmMobilePhone',
            true,
            true
        )
        ->sendRequest();

    $status = $response->getSmsConfirmation();
} catch (MindboxClientException $e) {
    // Логирование, сообщение пользователю
}
```

Параметры `confirmMobile`:  
`confirmMobile($customer, $smsConfirmation, $operationName, $addDeviceUUID = true, $isSync = true)`.

- `**$addDeviceUUID**` — передавать ли DeviceUUID (по правилам проекта).
- `**$isSync**` — для ТЗ «синхронно» оставьте `true`.

---

## Пример: переотправка кода (`ResendMobilePhoneConfirmationCode`)

```php
<?php

use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

$customer = new CustomerRequestDTO();
$customer->setId('bitrixId', (string)$bitrixUserId);

try {
    $response = getMindboxClient()
        ->customer()
        ->resendConfirmationCode(
            $customer,
            'Website.ResendMobilePhoneConfirmationCode',
            true,
            true
        )
        ->sendRequest();
} catch (MindboxClientException $e) {
    // Логирование, лимиты повторной отправки — по продуктовым правилам
}
```

Сигнатура: `resendConfirmationCode($customer, $operationName, $addDeviceUUID = true, $isSync = true)`.

---

## Связь с сценариями из ТЗ


| Сценарий       | Что делает сайт на Mindbox                                                                                                                                   | Что уже сделано сценарием до вызовов ниже                                                                            |
| -------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------ | -------------------------------------------------------------------------------------------------------------------- |
| Регистрация    | После регистрации клиента в Mindbox на телефон уходит SMS; пользователь вводит код → `**ConfirmMobilePhone**`                                                | Первичная отправка SMS                                                                                               |
| Смена телефона | Новый номер передаётся до подтверждения; SMS уходит автоматически; при необходимости `**ResendMobilePhoneConfirmationCode**`, затем `**ConfirmMobilePhone**` | Первичная отправка на новый номер (операция смены номера в вашем проекте — см. [редактирование](./customer-edit.md)) |


---

## Ошибки и отладка

- Не подставляйте код из SMS в логи и публичные ответы.
- Разбор ответа и кодов ошибок Mindbox — по [общей документации API](https://developers.mindbox.ru/docs/v3) и логам SDK.
- Расширенные примеры: [CustomerHelper в общих примерах](../examples/customer_helper.md) (в т.ч. `sendAuthorizationCode` / `checkAuthorizationCode`, если понадобятся вне этого ТЗ).

