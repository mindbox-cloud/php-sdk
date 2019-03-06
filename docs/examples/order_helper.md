# Стандартные операции с процессингом заказов

Для наиболее часто используемых операций связанных с процессингом заказов реализован хелпер OrderHelper.

Хелпер является обёрткой над универсальными методами отправки произвольного запроса.

## Примеры использования OrderHelper

[Создание заказа](https://developers.mindbox.ru/docs/xml):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\V2\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

$order = new \Mindbox\DTO\V2\Requests\OrderCreateRequestDTO();
$order->setCustomer($customer);

/* Формирование состава заказа */

try {
    $response = $mindbox->order()
        ->createOrder(
            $order, // OrderCreateRequestDTO
            'Website.CreateOrder' // название операции
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Предварительный расчет заказа](https://developers.mindbox.ru/docs/preorderxml):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\V2\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

$order = new \Mindbox\DTO\V2\Requests\PreorderRequestDTO();
$order->setCustomer($customer);

/* Формирование состава заказа */

try {
    $response = $mindbox->order()
        ->calculateCart(
            $order, // PreorderRequestDTO
            'Website.CalculateCart' // название операции
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Подтверждение заказа](https://developers.mindbox.ru/docs/изменение-заказа):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\V2\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

$order = new \Mindbox\DTO\V2\Requests\OrderUpdateRequestDTO();
$order->setCustomer($customer);

/* Формирование состава заказа */

try {
    $response = $mindbox->order()
        ->confirmOrder(
            $order, // OrderUpdateRequestDTO
            'Website.ConfirmOrder' // название операции
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Отмена заказа](https://developers.mindbox.ru/docs/изменение-заказа):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\V2\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

$order = new \Mindbox\DTO\V2\Requests\OrderUpdateRequestDTO();
$order->setCustomer($customer);

/* Формирование состава заказа */

try {
    $response = $mindbox->order()
        ->cancelOrder(
            $order, // OrderUpdateRequestDTO
            'Website.CancelOrder' // название операции
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Оффлайн заказ](https://developers.mindbox.ru/docs/изменение-заказа):

``` php

/* Подключение автозагрузчика и инициализация SDK */

$customer = new \Mindbox\DTO\V2\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

$order = new \Mindbox\DTO\V2\Requests\OrderUpdateRequestDTO();
$order->setCustomer($customer);

/* Формирование состава заказа */

try {
    $response = $mindbox->order()
        ->offlineOrder(
            $order, // OrderUpdateRequestDTO
            'Website.OfflineOrder' // название операции
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```

[Получение списка заказов потребителя](https://developers.mindbox.ru/docs/получение-списка-заказов-потребителя):

``` php

/* Подключение автозагрузчика и инициализация SDK */

try {
    $response = $mindbox->order()
        ->getOrders(
            10, // максимальное количество заказов для возврата
            1234, // идентификатор потребителя
            1, // порядковый номер заказа, начиная с которого будет сформирован список заказов
            'Website.GetCustomerOrders' // название операции
        )->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();

    return;
}

var_dump($response->getRequest());
var_dump($response->getBody());
```