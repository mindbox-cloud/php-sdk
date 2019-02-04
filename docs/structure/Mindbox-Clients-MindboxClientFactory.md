Mindbox\Clients\MindboxClientFactory
===============

Класс, отвечающий за инициализацию Mindbox API клиента, согласно пользовательской конфигурации.

Class MindboxClientFactory


* Class name: MindboxClientFactory
* Namespace: Mindbox\Clients







Methods
-------


### createMindboxClient

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Clients\MindboxClientFactory::createMindboxClient(string $apiVersion, string $endpointId, string $secretKey, string $domain, \Mindbox\HttpClients\IHttpClient $httpClient, \Psr\Log\LoggerInterface $logger)

Конструктор MindboxClientFactory.



* Visibility: **public**


#### Arguments
* $apiVersion **string** - &lt;p&gt;Версия Mindbox API.&lt;/p&gt;
* $endpointId **string** - &lt;p&gt;Уникальный идентификатор сайта/мобильного приложения/и т.п.&lt;/p&gt;
* $secretKey **string** - &lt;p&gt;Секретный ключ.&lt;/p&gt;
* $domain **string** - &lt;p&gt;Домен.&lt;/p&gt;
* $httpClient **[Mindbox\HttpClients\IHttpClient](Mindbox-HttpClients-IHttpClient.md)** - &lt;p&gt;Экземпляр HTTP клиента.&lt;/p&gt;
* $logger **Psr\Log\LoggerInterface** - &lt;p&gt;Экземпляр логгера.&lt;/p&gt;


