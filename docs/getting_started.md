# Гайд по установке и настройке Mindbox PHP SDK

## Автозагрузчик и пространства имён

Код Mindbox PHP SDK написан в соответствии со стандартом [PSR-4](https://www.php-fig.org/psr/psr-4/). Это означает, что файлы классов могут загружаться автоматически.

## Системные зависимости

* PHP версии 7.3 или выше
* [psr/log](https://github.com/php-fig/log)
* [ext-json](http://php.net/manual/ru/json.installation.php)
* [ext-simplexml](http://php.net/manual/ru/simplexml.installation.php)
* [ext-libxml](http://php.net/manual/ru/libxml.installation.php)
* [ext-curl](http://php.net/manual/ru/curl.installation.php) (опционально)

## Установка

Вы можете установить Mindbox SDK двумя способами: используя Composer или скачав архив. Первый способ предпочтительнее, так как позволяет обновить библиотеку одной командой.

### Composer (рекомендуемый способ)

Mindbox PHP SDK можно установить с помощью менеджера зависимостей [Composer](https://getcomposer.org/), используя следующую команду в корне вашего проекта:

```sh
composer require mindbox/sdk
```

Для установки Mindbox PHP SDK в проекты, которые работают на PHP версии >=5.6 и < 7.3 необходимо использовать версию 1.0.7. Для этого выполнить следующую команду:

```sh
composer require "mindbox/sdk:^1.0.7"

```

После выполнения данной команды, composer загрузит последнюю версию SDK и поместит её в директорию /vendor/.

Убедитесь, что в начале вашего скрипта подключен автозагрузчик классов Composer:

```php
require_once __DIR__ . '/vendor/autoload.php';
```

### Установка вручную

1. [Скачайте архив](https://github.com/mindbox-cloud/php-sdk/releases/download/1.1.3/php-sdk.zip), содержащий исходный код проекта (включая зависимости).
2. Распакуйте в директорию вашего проекта.
3. Подключите автозагрузчик классов в начале вашего скрипта:

```php
require_once __DIR__ . '/path/to/mindboxSDK/vendor/autoload.php';
```

## Конфигурирование и инициализация SDK

Обязательные параметры конфигурации SDK:
* endpointId - уникальный идентификатор сайта/мобильного приложения/и т.п. Значение нужно уточнить у менеджера Mindbox.
* secretKey - секретный ключ, соответствующий endpointId. Значение нужно уточнить у менеджера Mindbox.
* domain - домен, на который будут отправляться запросы к v2.1 API Mindbox: https://{domain}/v2.1/orders/.
* domainZone - доменная зона, на которую будут отправляться запросы к v3 API Mindbox: https://api.mindbox.{{domainZone}}/v3/operations/.

Опциональные параметры:
* timeout - таймаут соединения при выполнении HTTP запроса (в секундах). По умолчанию равен 5 секундам.
* httpClient - назвавние клиента для отправки запроса ("curl", "stream"). По умолчанию curl, если установлено расширение ext-curl, иначе stream.

Дополнительно при инициализации Mindbox SDK необходимо передать в конструктор объект логгера, реализующий интерфейс \Psr\Log\LoggerInterface.

Пример инициализации SDK:

```php
$logger = new \Mindbox\Loggers\MindboxFileLogger('{logsDir}');

$mindbox = new \Mindbox\Mindbox([
    'endpointId' => '{endpointId}',
    'secretKey' => '{secretKey}',
    'domain' => '{domain}',
    'domainZone' => '{domainZone}',
    //'timeout' => '{timeout}',
    //'httpClient' => '{httpClient}',
], $logger);
```

> Замените все параметры в фигурных скобках на нужные вам значения.

## Логирование запросов

Для логирования запросов вы можете использовать содержащийся в библиотеке простой файловый логгер: \Mindbox\Loggers\MindboxFileLogger, который принимает в качестве параметров конструктора:
  * путь до директории с логами;
  * уровень логирования запросов.
  
  MindboxFileLogger реализован в соответствии с [PSR-3](https://www.php-fig.org/psr/psr-3/), поэтому вы можете использовать свой логгер, при условии что он наследует интерфейс \Psr\Log\LoggerInterface.

Базовые уровни логирования запросов, используемые в Mindbox SDK:
* \Mindbox\Loggers\MindboxFileLogger::ERROR (по умолчанию) - в лог запишутся только ошибочные запросы (пустое тело ответа, ошибки 4XX, неизвестный http код ответа).
* \Mindbox\Loggers\MindboxFileLogger::ALERT - в лог запишутся ошибочные запросы и запросы, завершённые с кодом ответа 5XX (Mindbox недоступен).
* \Mindbox\Loggers\MindboxFileLogger::INFO - в лог будут записываться все запросы, в том числе успешные.

Вы можете передать в конструтор MindboxFileLogger как константу, так и её строковое представление (соответствует имени константы).

## Отправка запросов к Mindbox API

### Использование хелперов для стандартных операций

Для стандартных операций Mindbox реализован набор хелперов, упрощающий осуществление запросов.
Простой пример отправки запроса авторизации потребителя к Mindbox с использованием хелпера:

```php

$logger = new \Mindbox\Loggers\MindboxFileLogger('{logsDir}');

$mindbox = new \Mindbox\Mindbox([
    'endpointId' => '{endpointId}',
    'secretKey' => '{secretKey}',
    'domainZone' => '{domain}',
], $logger);

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');
$customer->setMobilePhone('77777777777');
$customer->setId('mindboxId', '1028');

try {
    $response = $mindbox->customer()
            ->authorize($customer, 'Website.AuthorizeCustomer')
            ->sendRequest();
    $requestBody = $response->getRequest()->getBody();
    $responseBody = $response->getBody();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
}
```

### Универсальные методы для отправки произвольных запросов

Запросы, для которых не реализованы хелперы, можно выполнить с помощью универсальных методов:

```php
$logger = new \Mindbox\Loggers\MindboxFileLogger('{logsDir}');

$mindbox = new \Mindbox\Mindbox([
    'endpointId' => '{endpointId}',
    'secretKey' => '{secretKey}',
    'domainZone' => '{domainZone}',
], $logger);

$operation = new \Mindbox\DTO\V3\OperationDTO();

$customer = new \Mindbox\DTO\V3\Requests\CustomerRequestDTO();
$customer->setEmail('test@test.ru');
$customer->setMobilePhone('77777777777');
$customer->setId('mindboxId', '1028');

$operation->setCustomer($customer);

try {
    $response = $mindbox->getClientV3()
            ->prepareRequest('POST', 'Website.AuthorizeCustomer', $operation, '', [], false)
            ->sendRequest();
    $requestBody = $response->getRequest()->getBody();
    $responseBody = $response->getBody();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
}
```

## Пример отправки запроса на произвольны URL к API v3
Обязательные параметры конфигурации SDK:
* endpointId - уникальный идентификатор сайта/мобильного приложения/и т.п. Значение нужно уточнить у менеджера Mindbox.
* secretKey - секретный ключ, соответствующий endpointId. Значение нужно уточнить у менеджера Mindbox.
* timeout - таймаут соединения при выполнении HTTP запроса (в секундах). По умолчанию равен 5 секундам.
* httpClient - назвавние клиента для отправки запроса ("curl", "stream"). По умолчанию curl, если установлено расширение ext-curl, иначе stream.
* logger - объект логгера, реализующий интерфейс \Psr\Log\LoggerInterface.
* domainZone - доменная зона ("ru", "api-ru", "cloud", "io")


Опциональные параметры:
* $domain - Домен API URL ("api.mindbox", "api.s.mindbox", "api.maestra")

При передача домена, URL запроса формируется следующим образом:

https://{domain}.{domainZone}/v3/operations/


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