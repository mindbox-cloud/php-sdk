# Возможные исключения при отправке запроса

Если Mindbox возвращает ответом в HTTP кодом отличным от 200, будет выброшено исключение.

Список исключений:
* \Mindbox\Exceptions\MindboxClientErrorException - код ответа 4XX:
    * \Mindbox\Exceptions\MindboxBadRequestException - код ответа 400;
    * \Mindbox\Exceptions\MindboxConflictException - код ответа 409;
    * \Mindbox\Exceptions\MindboxForbiddenException - код ответа 403;
    * \Mindbox\Exceptions\MindboxNotFoundException - код ответа 404;
    * \Mindbox\Exceptions\MindboxTooManyRequestsException - код ответа 429;
    * \Mindbox\Exceptions\MindboxUnauthorizedException - код ответа 401;
* \Mindbox\Exceptions\MindboxUnavailableException - код ответа 503, 500;
* \Mindbox\Exceptions\MindboxClientException - любой другой отличный от 200 код ответа, пустое тело ответа;

Все перечисленные исключения наследуются от \Mindbox\Exceptions\MindboxClientException.

## Пример обработки исключений

```php
$logger = new \Mindbox\Loggers\MindboxFileLogger('{logsDir}');

$mindbox = new \Mindbox\Mindbox([
    'endpointId' => '{endpointId}',
    'secretKey' => '{secretKey}',
    'domainZone' => '{domain}',
], $logger);

try {
    $response = $mindbox->order()
        ->getOrders(10, 252, 0, 'DirectCrm.V21CustomerOrderListOperation')
        ->sendRequest();
} catch (\Mindbox\Exceptions\MindboxBadRequestException $e) {
    /* можно отлавливать и обрабатывать определённое исключение, в данном случае с кодом ответа 400 */
    echo $e->getMessage().PHP_EOL;
    $mindbox->order()->getLastResponse();
} catch (\Mindbox\Exceptions\MindboxClientErrorException $e) {
    /* можно отлавливать и обрабатывать более общее исключение, в данном случае с кодом ответа 4XX */
    echo $e->getMessage().PHP_EOL;
    $mindbox->order()->getLastResponse();
} catch (\Mindbox\Exceptions\MindboxUnavailableException $e) {
     /* можно отлавливать и каким-либо образом обрабатывать исключение с кодом ответа 5XX */
    echo $e->getMessage().PHP_EOL;
    $mindbox->order()->getLastResponse();
    return;
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    /* можно отлавливать самое верхнеуровневое исключение */
    echo $e->getMessage().PHP_EOL;
    $mindbox->order()->getLastResponse();
}
```