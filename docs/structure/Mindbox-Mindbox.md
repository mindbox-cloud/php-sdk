Mindbox\Mindbox
===============

Основная точка входа в приложение, отвечающая за инициализацию всех необходимых зависимостей, согласно переданной
конфигурации приложения.

Class Mindbox


* Class name: Mindbox
* Namespace: Mindbox





Properties
----------


### $defaultConfig

    private array $defaultConfig = array('endpointId' => null, 'secretKey' => null, 'domain' => null, 'timeout' => null, 'httpClient' => null)





* Visibility: **private**


### $client

    private \Mindbox\Clients\AbstractMindboxClient $client





* Visibility: **private**


### $clientV2

    private \Mindbox\Clients\AbstractMindboxClient $clientV2





* Visibility: **private**


### $customer

    private \Mindbox\Helpers\CustomerHelper $customer





* Visibility: **private**


### $order

    private \Mindbox\Helpers\OrderHelper $order





* Visibility: **private**


### $productList

    private \Mindbox\Helpers\ProductListHelper $productList





* Visibility: **private**


### $config

    private array $config





* Visibility: **private**


Methods
-------


### __construct

    mixed Mindbox\Mindbox::__construct(array $config, \Psr\Log\LoggerInterface $logger)

Конструктор Mindbox.



* Visibility: **public**


#### Arguments
* $config **array** - &lt;p&gt;Пользовательская конфигурация.&lt;/p&gt;
* $logger **Psr\Log\LoggerInterface** - &lt;p&gt;Экземпляр логгера.&lt;/p&gt;



### setConfig

    mixed Mindbox\Mindbox::setConfig(array $config)

Сеттер для $config.



* Visibility: **protected**


#### Arguments
* $config **array** - &lt;p&gt;Массив, содержащий конфигурацию.&lt;/p&gt;



### getDefaultConfig

    array Mindbox\Mindbox::getDefaultConfig()

Геттер для $defaultConfig.



* Visibility: **private**




### getHttpClientsFactory

    \Mindbox\HttpClients\HttpClientFactory Mindbox\Mindbox::getHttpClientsFactory()

Геттер для HttpClientFactory.



* Visibility: **protected**




### getMindboxClientFactory

    \Mindbox\Clients\MindboxClientFactory Mindbox\Mindbox::getMindboxClientFactory()

Геттер для MindboxClientFactory.



* Visibility: **protected**




### getClientV3

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Mindbox::getClientV3()

Геттер для $client.



* Visibility: **public**




### getClientV2

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Mindbox::getClientV2()

Геттер для $clientV2.



* Visibility: **public**




### getClient

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Mindbox::getClient(string $apiVersion)

Геттер для MindboxClient по версии API.



* Visibility: **public**


#### Arguments
* $apiVersion **string** - &lt;p&gt;Версия API.&lt;/p&gt;



### customer

    \Mindbox\Helpers\CustomerHelper Mindbox\Mindbox::customer()

Геттер для $customer.



* Visibility: **public**




### order

    \Mindbox\Helpers\OrderHelper Mindbox\Mindbox::order()

Геттер для $order.



* Visibility: **public**




### productList

    \Mindbox\Helpers\ProductListHelper Mindbox\Mindbox::productList()

Геттер для $productList.



* Visibility: **public**



