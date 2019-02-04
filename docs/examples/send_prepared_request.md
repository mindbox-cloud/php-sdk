# Пример работы с заранее подготовленным запросом

Вы можете передать запрос в MindboxClient двумя способами:
 * передав параметры запроса в метод ::prepareRequest;
 * передав готовый экземпляр запроса в метод ::setRequest.
 
 Таким образом можно организовать повторную отправку запроса без генерации всех необходимых полей, если по каким-то причинам Mindbox API недоступен.

## Пример создания экземпляра запроса и установка его в MindboxClient

``` php
require_once __DIR__ . '{путь/до/автозагрузчика}';

$logger = new \Mindbox\Loggers\MindboxFileLogger('{logsDir}');

$mindbox = new \Mindbox\Mindbox([
    'endpointId'   => '{endpointId}',
    'secretKey'    => '{secretKey}',
    'domain'       => '{domain}',
], $logger);

$apiVersion = 'v3';
$url        = 'https://api.mindbox.ru/v3/operations/async?endpointId={endpointId}&operation={operation}';
$method     = 'POST';
$body       = '{"customer":{"email":"some_email","mobilePhone":"some_mobilePhone","ids":{"bitrixId":"123456","mindboxId":"1028"}}}';
$headers    = [
    'Accept'        => 'application/json',
    'Content-Type'  => 'application/json',
    'Authorization' => 'Mindbox secretKey="{secretKey}"',
];

$request = new \Mindbox\MindboxRequest($apiVersion, $url, $method, $body, $headers); // вы можете собрать экземпляр запроса вручную при необходимости

try {
    $response = $mindbox->getClientV3()
        ->setRequest($request)
        ->sendRequest();

    throw new \Mindbox\Exceptions\MindboxClientException('someError');
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    $repeatRequest = $mindbox->getClientV3()
        ->getLastResponse()
        ->getRequest(); // вы можете получить готовый экземпляр запроса из MindboxClient или любого хелпера

    try {
        $repeatResponse = $mindbox->getClient($repeatRequest->getApiVersion()) // получаем нужную для запроса версию клиента
            ->setRequest($repeatRequest)
            ->sendRequest();
    } catch (\Mindbox\Exceptions\MindboxClientException $e) {
        echo $e->getMessage();

        return;
    }

    var_dump($repeatResponse->getRequest());
    var_dump($repeatResponse->getBody());
}
```