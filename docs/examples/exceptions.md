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
} catch (\Mindbox\Exceptions\MindboxBadRequestException $e) {
    echo $e->getMessage().PHP_EOL;
    
    $mindbox->order()->getLastResponse();

    /* можно отлавливать и обрабатывать определённое исключение, в данном случае с кодом ответа 400 */

    return;
} catch (\Mindbox\Exceptions\MindboxClientErrorException $e) {
    echo $e->getMessage().PHP_EOL;
    
    $mindbox->order()->getLastResponse();

    /* можно отлавливать и обрабатывать более общее исключение, в данном случае с кодом ответа 4XX */

    return;
} catch (\Mindbox\Exceptions\MindboxUnavailableException $e) {
    echo $e->getMessage().PHP_EOL;
    
    $mindbox->order()->getLastResponse();

    /* можно отлавливать и каким-либо образом обрабатывать исключение с кодом ответа 5XX */

    return;
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage().PHP_EOL;
    
    $mindbox->order()->getLastResponse();

    /* можно отлавливать самое верхнеуровневое исключение */

    return;
}
```