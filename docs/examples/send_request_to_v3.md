# Подготовка и отправка запроса к Mindbox API v3

Вы можете отправить произвольный запрос к Mindbox API v3.
Параметры запроса:
* method - HTTP метод запроса: 'POST', 'GET';
* operationName - название операции в Mindbox;
* body - тело запроса в виде DTO, необязательный параметр;
* additionalUrl - дополнительный URL, конкатенируется с базовым URL: https://{domain}.{domainZone}/v3/operations/{additionalUrl}, необязательный параметр;
* queryParams - массив дополнительных GET параметров, необязательный параметр;
* isSync - флаг, синхронный или асинхронный запрос, по умолчанию true (синхронный), необязательный параметр;
* addDeviceUUID - флаг, добавлять ли DeviceUUID в запрос, по умолчанию true (добавляет DeviceUUID из куки mindboxDeviceUUID в query-параметры запроса и IP-адрес потребителя в заголовок X-Customer-IP), необязательный параметр.

Базовый DTO для формирования тела запроса к v3 - \Mindbox\DTO\V3\OperationDTO().

Запросы к Mindbox API v3 отправляются в формате JSON, в кодировке UTF-8.

## Пример отправки произвольного запроса к API v3

``` php
$logger = new \Mindbox\Loggers\MindboxFileLogger('{logsDir}');

$mindbox = new \Mindbox\Mindbox([
    'endpointId' => '{endpointId}',
    'secretKey' => '{secretKey}',
    'domainZone' => '{domainZone}',
], $logger);

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');
$customer->setMobilePhone('79374134389');
$customer->setId('bitrixId', '123456');
$customer->setId('mindboxId', '1028');

$operation = new \Mindbox\DTO\V3\OperationDTO();
$operation->setCustomer($customer);

/* Формирование состава операции */

try {
    $response = $mindbox->getClientV3()
        ->prepareRequest('POST', 'Website.AuthorizeCustomer', $operation, '', [], false, false)
        ->sendRequest();
    
    $requestBody = $response->getRequest()->getBody();
    $responseBody = $response->getBody();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
}
```
Для указания запроса на произвольный url mindbox следует следует использовать \Mindbox\Clients\MindboxClientV3 вместо фабрики

## Пример отправки запроса на произвольны URL к API v3
``` php
$logger = new \Mindbox\Loggers\MindboxFileLogger('{logsDir}');
$httpClient = (new \Mindbox\HttpClients\HttpClientFactory())->createHttpClient('{timeout}', '{handlerName}'); 

$client = new \Mindbox\Clients\MindboxClientV3(
    '{endpointId}',
    '{secretKey}',
    $httpClient,
    $logger,
    '{domainZone}'
    '{domain}'
);

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');
$customer->setMobilePhone('79374134389');
$customer->setId('bitrixId', '123456');
$customer->setId('mindboxId', '1028');

$operation = new \Mindbox\DTO\V3\OperationDTO();
$operation->setCustomer($customer);

/* Формирование состава операции */
try {
    $response = $client
        ->prepareRequest('POST', 'Website.AuthorizeCustomer', $operation, '', [], false, false)
        ->sendRequest();
    
    $requestBody = $response->getRequest()->getBody();
    $responseBody = $response->getBody();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
}
```