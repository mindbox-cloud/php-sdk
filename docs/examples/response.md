# Работа с MindboxResponse

При любом успешно выполненном запросе SDK возвращает пользователю объект MindboxResponse.

Доступные пользователю методы MindboxResponse:
* isError() - возвращает true или false в зависимости от успеха выполнения операции;
* getBody() - возвращает тело ответа в виде массива;
* getMindboxStatus() - возвращает статус Mindbox, если он присутствует в ответе;
* getResult() - возвращает тело ответа в виде DTO;
* getValidationErrors()  - возвращает ошибки валидации, если такие есть в ответе;
* getHttpCode() - возвращает HTTP код ответа;
* getHeaders() - возвращает массив заголовков ответа;
* getRawBody() - возвращает "сырое" тело ответа (XML|JSON);
* getRequest() - возвращает связанный экземпляр запроса;

## Пример работы с результатом запроса к Mindbox API

```php
require_once __DIR__ . '{путь/до/автозагрузчика}';

$logger = new \Mindbox\Loggers\MindboxFileLogger('{logsDir}');

$mindbox = new \Mindbox\Mindbox([
    'endpointId'   => '{endpointId}',
    'secretKey'    => '{secretKey}',
    'domain'       => '{domain}',
], $logger);

try {
    $response = $mindbox->order()
        ->getOrders(10, 252, 0, 'DirectCrm.V21CustomerOrderListOperation')
        ->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage().PHP_EOL;

    $response = $mindbox->order()->getLastResponse();
    var_dump($response->isError()); // выведет true
    return;
}

foreach ($response->getResult()->getOrders() as $order) {
    /* @var $order \Mindbox\DTO\OrderResponseDTO */
    var_dump($order->discountedTotalPrice());
    var_dump($order->getLines());
}
```