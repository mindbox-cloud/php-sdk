# Mindbox PHP SDK

PHP библиотека для упрощённого взаимодейтсвия вашего PHP приложения с API Mindbox. С полной документацией API Mindbox можно ознакомиться [здесь](https://developers.mindbox.ru/docs/v3).

## Начало работы

### Зависимости

* PHP версии 5.6 или выше
* [psr/log](https://github.com/php-fig/log)
* [ext-json](http://php.net/manual/ru/json.installation.php)
* [ext-simplexml](http://php.net/manual/ru/simplexml.installation.php)
* [ext-libxml](http://php.net/manual/ru/libxml.installation.php)
* [ext-curl](http://php.net/manual/ru/curl.installation.php) (опционально)


### Установка

Вы можете установить Mindbox SDK двумя способами: используя Composer или скачав архив. Первый способ предпочтительнее, так как позволяет обновить библиотеку одной командой.

#### Composer (рекомендуемый способ)

Mindbox PHP SDK можно установить с помощью менеджера зависимостей [Composer](https://getcomposer.org/), используя следующую команду:

```sh
composer require mindbox/sdk
```

#### Установка вручную

1. [Скачайте архив](https://mindbox.ru/), содержащий исходный код проекта (включая зависимости).
2. Распакуйте в директорию вашего проекта.
3. Подключите автозагрузчик классов в начале вашего скрипта:

```php
require_once __DIR__ . '/path/to/mindboxSDK/vendor/autoload.php';
```

## Использование

### Инициализация SDK

```php
require_once __DIR__ . '{путь/до/автозагрузчика}';

$logger = new \Mindbox\Loggers\MindboxFileLogger('{путь/к/директории/в/которую/будут/записаны/логи}');

$mindbox = new \Mindbox\Mindbox([
    'endpointId'   => '{endpointId}',
    'secretKey'    => '{secretKey}',
    'domain'       => '{domain}',
    //'timeout'    => '{timeout}', // Таймаут соединения http запроса (в секундах), опционально. По умолчанию 5 секунд.
    //'httpClient' => '{httpClient}', // Способ отправки запроса ("curl", "stream"), опционально. По умолчанию curl, если установлено расширение ext-curl, иначе stream.
], $logger);
```

Подробнее о конфигурации и инициализации SDK [здесь](docs/getting_started.md).

### Использование хелперов для стандартных операций

Для стандартных операций Mindbox реализован набор хелперов, упрощающий осуществление запросов.
Простой пример отправки запроса авторизации потребителя к Mindbox с использованием хелпера:

```php
require_once __DIR__ . '{путь/до/автозагрузчика}';

$logger = new \Mindbox\Loggers\MindboxFileLogger('{logsDir}');

$mindbox = new \Mindbox\Mindbox([
    'endpointId'   => '{endpointId}',
    'secretKey'    => '{secretKey}',
    'domain'       => '{domain}',
], $logger);

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setEmail('test@test.ru');
$customer->setMobilePhone('77777777777');
$customer->setId('mindboxId', '1028');

try {
    $response = $mindbox->customer()
        ->authorize($customer, 'Website.AuthorizeCustomer')
        ->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
    return;
}

var_dump($response->getRequest()->getBody());
var_dump($response->getBody());
```

Подробнее об использовании хелперов SDK [здесь](docs/README.md#примеры-использования-sdk).

### Универсальные методы для отправки произвольных запросов

Запросы, для которых не реализованы хелперы, можно выполнить с помощью универсальных методов:

```php
require_once __DIR__ . '{путь/до/автозагрузчика}';

$logger = new \Mindbox\Loggers\MindboxFileLogger('{logsDir}');

$mindbox = new \Mindbox\Mindbox([
    'endpointId'   => '{endpointId}',
    'secretKey'    => '{secretKey}',
    'domain'       => '{domain}',
], $logger);

$operation = new \Mindbox\DTO\OperationDTO();

$customer = new \Mindbox\DTO\CustomerRequestDTO();
$customer->setEmail('test@test.ru');
$customer->setMobilePhone('77777777777');
$customer->setId('mindboxId', '1028');

$operation->setCustomer($customer);

try {
    $response = $mindbox->getClientV3()
        ->prepareRequest('POST', 'Website.AuthorizeCustomer', $operation, '', [], false)
        ->sendRequest();
} catch (\Mindbox\Exceptions\MindboxClientException $e) {
    echo $e->getMessage();
    return;
}

var_dump($response->getRequest()->getBody());
var_dump($response->getBody());
```

Подробнее об использовании универсальных методов SDK [здесь](docs/README.md#примеры-использования-sdk).

## Документация

Подробная документация библиотеки доступна по [ссылке](docs/README.md).