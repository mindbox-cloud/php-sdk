# Подписка на рассылки (SubscribeCustomer)

Подписка через форму на сайте (футер, попап и т.д.) вызывает операцию **SubscribeCustomer** в Mindbox (имя операции в проекте — **уточните у менеджера**).

**Предусловия:** выполнен [быстрый старт](./README.md) (SDK, конфиг, `getMindboxClient()`).

В ядре Битрикс **нет одного стандартного события** «отправлена форма подписки» — обработчик вешайте на **свой** компонент / контроллер / `ajax.php`, где принимаете email и вызываете код ниже.

---

## Параметры интеграции

| Параметр | Значение |
|----------|----------|
| Операция Mindbox | `Website.SubscribeCustomer` |
| DeviceUUID | Да (`addDeviceUUID: true`) |
| Синхронность | Синхронно (`isSync: true`) |
| Точка интеграции Битрикс | Форма подписки (футер, попап, отдельная страница) |
| Хелпер SDK | `$mindbox->customer()->subscribe(...)` |

Сигнатура:

```php
public function subscribe(
    CustomerRequestDTO $customer,
    $operationName,
    $addDeviceUUID = false,
    $isSync = true
)
```

Для сценария из таблицы вызывайте: **`subscribe($customer, 'Website.SubscribeCustomer', true, true)`**.

---

## Данные запроса

| Поле | Описание |
|------|----------|
| Клиент | `CustomerRequestDTO`: как минимум **`setEmail()`** |
| Подписка | `SubscriptionRequestDTO` с **`setPointOfContact()`** (например `'Email'`) — передаётся в **`CustomerRequestDTO::setSubscriptions(new SubscriptionRequestCollection([...]))`** |

Точный набор полей подписки — по операции в Mindbox.

---

## Полный пример

Обработка после валидации email из формы (`$email` — строка из `$_POST` / параметра action):

```php
<?php

use Mindbox\DTO\V3\Requests\CustomerRequestDTO;
use Mindbox\DTO\V3\Requests\SubscriptionRequestCollection;
use Mindbox\DTO\V3\Requests\SubscriptionRequestDTO;
use Mindbox\Exceptions\MindboxClientException;

$email = ''; // подставьте из запроса

$customer = new CustomerRequestDTO();
$customer->setEmail($email);

$subscription = new SubscriptionRequestDTO();
$subscription->setPointOfContact('Email');

$customer->setSubscriptions(new SubscriptionRequestCollection([$subscription]));

try {
    getMindboxClient()
        ->customer()
        ->subscribe($customer, 'Website.SubscribeCustomer', true, true)
        ->sendRequest();
} catch (MindboxClientException $e) {
    // Логирование ошибки
}
```

---

## Краткий фрагмент только вызова Mindbox

```php
$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail($email);

$subscription = new \Mindbox\DTO\V3\Requests\SubscriptionRequestDTO();
$subscription->setPointOfContact('Email');
$customer->setSubscriptions(
    new \Mindbox\DTO\V3\Requests\SubscriptionRequestCollection([$subscription])
);

try {
    $response = getMindboxClient()
        ->customer()
        ->subscribe($customer, 'Website.SubscribeCustomer', true, true)
        ->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    // Логирование ошибки
}
```

---

## Параметры `subscribe()`

- **`$addDeviceUUID`** — передавать ли DeviceUUID (`true` в таблице выше).
- **`$isSync`** — `true`: синхронный запрос к API v3, `false`: асинхронный.

---

## Ошибки и отладка

- Валидация email и защита от спама на стороне сайта до вызова Mindbox.
- См. [CustomerHelper в общих примерах SDK](../examples/customer_helper.md), [исключения SDK](../examples/exceptions.md).
