Mindbox\HttpClients\AbstractHttpClient
===============

Абстрактный класс, содержащий реализацию общих методов для всех HTTP клиентов.

Реализует интерйфес IHttpClient.
Class AbstractHttpClient


* Class name: AbstractHttpClient
* Namespace: Mindbox\HttpClients
* This is an **abstract** class
* This class implements: [Mindbox\HttpClients\IHttpClient](Mindbox-HttpClients-IHttpClient.md)


Constants
----------


### DEFAULT_CONNECTION_TIMEOUT

    const DEFAULT_CONNECTION_TIMEOUT = 5





Properties
----------


### $allowedMethods

    protected mixed $allowedMethods = array('POST', 'GET')

Допустимые HTTP методы для отправки запросов.



* Visibility: **protected**
* This property is **static**.


### $timeout

    protected integer $timeout





* Visibility: **protected**


Methods
-------


### __construct

    mixed Mindbox\HttpClients\AbstractHttpClient::__construct(integer|null $timeout)

Конструктор AbstractHttpClient.



* Visibility: **public**


#### Arguments
* $timeout **integer|null** - &lt;p&gt;Таймаут соединения.&lt;/p&gt;



### send

    \Mindbox\HttpClients\HttpClientRawResponse Mindbox\HttpClients\IHttpClient::send(\Mindbox\MindboxRequest $request)

Базовый метод отправки HTTP запроса, который должен быть реализован в каждом HTTP клиенте.



* Visibility: **public**
* This method is defined by [Mindbox\HttpClients\IHttpClient](Mindbox-HttpClients-IHttpClient.md)


#### Arguments
* $request **[Mindbox\MindboxRequest](Mindbox-MindboxRequest.md)** - &lt;p&gt;Экземпляр запроса.&lt;/p&gt;



### validateRequestMethod

    mixed Mindbox\HttpClients\AbstractHttpClient::validateRequestMethod(string $method)

Валидация HTTP метода отправки запроса.

При недопустимом методе будет выброшено исключение MindboxHttpClientException.

* Visibility: **private**


#### Arguments
* $method **string** - &lt;p&gt;HTTP метод отправки запроса.&lt;/p&gt;



### handleRequest

    \Mindbox\HttpClients\HttpClientRawResponse Mindbox\HttpClients\AbstractHttpClient::handleRequest(\Mindbox\MindboxRequest $request)

Абстрактный метод для отправки запроса, должен быть реализован в дочерних классах.



* Visibility: **protected**
* This method is **abstract**.


#### Arguments
* $request **[Mindbox\MindboxRequest](Mindbox-MindboxRequest.md)** - &lt;p&gt;Экземпляр запроса.&lt;/p&gt;


