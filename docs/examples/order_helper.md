# Стандартные операции с процессингом заказов

Для наиболее часто используемых операций связанных с процессингом заказов реализован хелпер OrderHelper.

Хелпер является обёрткой над универсальными методами отправки произвольного запроса.

## Примеры использования OrderHelper

[Создание заказа](https://developers.mindbox.ru/docs/xml):

``` php

/* Инициализация SDK */

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

$order = new \Mindbox\DTO\V3\Requests\OrderCreateRequestDTO();
$order->setCustomer($customer);

/* Формирование состава заказа */

try {
    $response = $mindbox->order()
        ->createOrder(
            $order, // OrderCreateRequestDTO
            'Website.CreateOrder' // название операции
        )->sendRequest();
    
    $requestBody = $response->getRequest()->getBody();
    $responseBody = $response->getBody();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
}
```

[Предварительный расчет заказа](https://developers.mindbox.ru/docs/preorderxml):

``` php

/* Инициализация SDK */

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

$order = new \Mindbox\DTO\V3\Requests\PreorderRequestDTO();
$order->setCustomer($customer);

/* Формирование состава заказа */

try {
    $response = $mindbox->order()
        ->calculateCart(
            $order, // PreorderRequestDTO
            'Website.CalculateCart' // название операции
        )->sendRequest();
        
    $requestBody = $response->getRequest()->getBody();
    $responseBody = $response->getBody();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
}
```

[Подтверждение заказа](https://developers.mindbox.ru/docs/изменение-заказа):

``` php

/* Инициализация SDK */

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

$order = new \Mindbox\DTO\V3\Requests\OrderUpdateRequestDTO();
$order->setCustomer($customer);

/* Формирование состава заказа */

try {
    $response = $mindbox->order()
        ->confirmOrder(
            $order, // OrderUpdateRequestDTO
            'Website.ConfirmOrder' // название операции
        )->sendRequest();
        
    $requestBody = $response->getRequest()->getBody();
    $responseBody = $response->getBody();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
}
```

[Отмена заказа](https://developers.mindbox.ru/docs/изменение-заказа):

``` php

/* Инициализация SDK */

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

$order = new \Mindbox\DTO\V3\Requests\OrderUpdateRequestDTO();
$order->setCustomer($customer);

/* Формирование состава заказа */

try {
    $response = $mindbox->order()
        ->cancelOrder(
            $order, // OrderUpdateRequestDTO
            'Website.CancelOrder' // название операции
        )->sendRequest();
    
    $requestBody = $response->getRequest()->getBody();
    $responseBody = $response->getBody();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
}
```

[Оффлайн заказ](https://developers.mindbox.ru/docs/изменение-заказа):

``` php

/* Инициализация SDK */

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');

$order = new \Mindbox\DTO\V3\Requests\OrderUpdateRequestDTO();
$order->setCustomer($customer);

/* Формирование состава заказа */

try {
    $response = $mindbox->order()
        ->offlineOrder(
            $order, // OrderUpdateRequestDTO
            'Website.OfflineOrder' // название операции
        )->sendRequest();
    
    $requestBody = $response->getRequest()->getBody();
    $responseBody = $response->getBody();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
}
```

[Получение списка заказов потребителя](https://developers.mindbox.ru/docs/получение-списка-заказов-потребителя):

``` php

/* Инициализация SDK */

try {
    $response = $mindbox->order()
        ->getOrders(
            10, // максимальное количество заказов для возврата
            1234, // идентификатор потребителя
            1, // порядковый номер заказа, начиная с которого будет сформирован список заказов
            'Website.GetCustomerOrders' // название операции
        )->sendRequest();
    
    $requestBody = $response->getRequest()->getBody();
    $responseBody = $response->getBody();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
}
```