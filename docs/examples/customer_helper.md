# Стандартные операции над потребителем

Для наиболее часто используемых операций над потребителем реализован хелпер CustomerHelper.

Хелпер является обёрткой над универсальными методами отправки произвольного запроса.

## Примеры использования CustomerHelper

[Авторизация потребителя](https://developers.mindbox.ru/v3.0/docs/json):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

/* Формирование данных о потребителе */

try {
    $response = $mindbox->customer()
        ->authorize(
            $customer, // CustomerRequestDTO
            'Website.AuthorizeCustomer', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Поиск потребителя по номеру телефона](https://developers.mindbox.ru/docs/получение-данных-потребителя):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setMobilePhone(77777777777);

try {
    $response = $mindbox->customer()
        ->checkByPhone(
            $customer, // CustomerRequestDTO
            'Website.CheckCustomerByMobilePhone', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Поиск потребителя по email адресу](https://developers.mindbox.ru/docs/получение-данных-потребителя):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

try {
    $response = $mindbox->customer()
        ->checkByMail(
            $customer, // CustomerRequestDTO
            'Website.CheckCustomerByEmail', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Регистрация потребителя](https://developers.mindbox.ru/docs/получение-данных-потребителя):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

/* Формирование данных о потребителе */

try {
    $response = $mindbox->customer()
        ->register(
            $customer, // CustomerRequestDTO
            'Website.RegisterCustomer', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Редактирование данных потребителя](https://developers.mindbox.ru/docs/userredxml):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setEmail('test@test.ru');
$customer->setId('mindboxId', 12345);

/* Формирование данных о потребителе */

try {
    $response = $mindbox->customer()
        ->edit(
            $customer, // CustomerRequestDTO
            'Website.EditCustomer', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Дозаполнение профиля потребителя](https://developers.mindbox.ru/docs/userredxml):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setEmail('test@test.ru');
$customer->setId('mindboxId', 12345);

/* Формирование данных о потребителе */

try {
    $response = $mindbox->customer()
        ->fill(
            $customer, // CustomerRequestDTO
            'Website.FillCustomerProfile', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Поиск потребителя по номеру карты](https://developers.mindbox.ru/docs/получение-данных-потребителя):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();

$discountCard = new \Mindbox\DTO\DiscountCardIdentityRequestDTO();
$discountCard->setId('number', 1111111111111);

$customer->setDiscountCard($discountCard);

try {
    $response = $mindbox->customer()
        ->getDataByDiscountCard(
            $customer, // CustomerRequestDTO
            'Website.GetCustomerDataByDiscountCard', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Объединение потребителей](https://developers.mindbox.ru/docs/объединение-потребителей-по-запросу):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$mergeCustomers = new Mindbox\DTO\MergeCustomersRequestDTO();

$customerToMerge = new \Mindbox\DTO\CustomerIdentityRequestDTO();
$customerToMerge->setId('mindboxId', 1029);

$customersToMerge = new \Mindbox\DTO\CustomerIdentityRequestCollection([$customerToMerge]);

$mergeCustomers->setCustomersToMerge($customersToMerge);

$resultingCustomer = new \Mindbox\DTO\CustomerIdentityRequestDTO();
$resultingCustomer->setId('mindboxId', 328);

$mergeCustomers->setResultingCustomer($resultingCustomer);

try {
    $response = $mindbox->customer()
        ->merge(
            $mergeCustomers, // MergeCustomersRequestDTO
            'Website.MergeCustomers', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}
```

[Проверка на наличие потребителя в программе лояльности](https://developers.mindbox.ru/docs/получение-сегментов-потребителя):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setId('mindboxId', 328);

try {
    $response = $mindbox->customer()
        ->checkActive(
            $customer, // CustomerRequestDTO
            'Website.CheckCustomerIsInLoyalityProgram', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Получение истории изменений баланса потребителя](https://developers.mindbox.ru/docs/получение-истории-изменений-баланса-потребителя):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setId('mindboxId', 1812);

$page = new \Mindbox\DTO\PageRequestDTO();
$page->setItemsPerPage(10);
$page->setPageNumber(1);

try {
    $response = $mindbox->customer()
        ->getBonusPointsHistory(
            $customer, // CustomerRequestDTO
            $page, // PageRequestDTO
            'Website.GetCustomerBonusPointsHistory', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Отправка кода подтверждения](https://developers.mindbox.ru/docs/send-confirmation-code):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setMobilePhone(77777777777);

try {
    $response = $mindbox->customer()
        ->sendAuthorizationCode(
            $customer, // CustomerRequestDTO
            'Website.SendMobilePhoneAuthorizationCode', // название операции
            false, // добавлять ли DeviceUUID в запрос, необязательный параметр
            true // синхронный запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Проверка кода подтверждения](https://developers.mindbox.ru/docs/по-секретному-коду):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setMobilePhone(77777777777);

try {
    $response = $mindbox->customer()
        ->checkAuthorizationCode(
            $customer, // CustomerRequestDTO
            '1234', // код подтверждения
            'Website.CheckMobilePhoneAuthorizationCode', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Повторная отправка кода подтверждения](https://developers.mindbox.ru/docs/send-confirmation-code):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setId('mindboxId', 1812);

try {
    $response = $mindbox->customer()
        ->resendConfirmationCode(
            $customer, // CustomerRequestDTO
            'Website.ResendMobilePhoneConfirmationCode', // название операции
            false, // добавлять ли DeviceUUID в запрос, необязательный параметр
            true // синхронный запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Подтверждение мобильного телефона](https://developers.mindbox.ru/docs/подтверждение-мобильного-телефона):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setId('mindboxId', 1812);

$smsConfirmation = new \Mindbox\DTO\SmsConfirmationRequestDTO();
$smsConfirmation->setCode(1234);

try {
    $response = $mindbox->customer()
        ->confirmMobile(
            $customer, // CustomerRequestDTO
            $smsConfirmation, // SmsConfirmationRequestDTO
            'Website.ConfirmMobilePhone', // название операции
            false, // добавлять ли DeviceUUID в запрос, необязательный параметр
            true // синхронный запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Подписка потребителя на рассылки](https://developers.mindbox.ru/v3.0/docs/json):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

$subscription = new \Mindbox\DTO\SubscriptionRequestDTO();
$subscription->setPointOfContact('email');

$subscriptionCollection = new \Mindbox\DTO\SubscriptionRequestCollection([$subscription]);

$customer->setSubscriptions($subscriptionCollection);

try {
    $response = $mindbox->customer()
        ->subscribe(
            $customer, // CustomerRequestDTO
            'Website.SubscribeCustomer', // название операции
            false, // добавлять ли DeviceUUID в запрос, необязательный параметр
            true // синхронный запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Подтверждение мобильного телефона на стороне клиента](https://developers.mindbox.ru/v3.0/docs/подтверждение-мобильного-телефона-на-стороне-клиента):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setMobilePhone(77777777777);
$customer->setId('mindboxId', 1812);

try {
    $response = $mindbox->customer()
        ->autoConfirmMobile(
            $customer, // CustomerRequestDTO
            'Website.AutoConfirmMobilePhone', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Получение баланса потребителя](https://developers.mindbox.ru/v3.0/docs/получение-баланса-потребителя):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setId('mindboxId', 1812);

try {
    $response = $mindbox->customer()
        ->getBalance(
            $customer, // CustomerRequestDTO
            'Website.GetCustomerBalance', // название операции
            false // добавлять ли DeviceUUID в запрос, необязательный параметр
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```