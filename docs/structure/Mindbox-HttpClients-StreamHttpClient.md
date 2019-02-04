Mindbox\HttpClients\StreamHttpClient
===============

Класс, реализующий абстрактные методы AbstractHttpClient для отправки HTTP запросов при помощи стандартных функций
PHP.

Class StreamHttpClient


* Class name: StreamHttpClient
* Namespace: Mindbox\HttpClients
* Parent class: [Mindbox\HttpClients\AbstractHttpClient](Mindbox-HttpClients-AbstractHttpClient.md)



Constants
----------


### DEFAULT_CONNECTION_TIMEOUT

    const DEFAULT_CONNECTION_TIMEOUT = 5





Properties
----------


### $stream

    protected \Mindbox\HttpClients\MindboxStream $stream





* Visibility: **protected**


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
* This method is defined by [Mindbox\HttpClients\AbstractHttpClient](Mindbox-HttpClients-AbstractHttpClient.md)


#### Arguments
* $timeout **integer|null** - &lt;p&gt;Таймаут соединения.&lt;/p&gt;



### handleRequest

    \Mindbox\HttpClients\HttpClientRawResponse Mindbox\HttpClients\AbstractHttpClient::handleRequest(\Mindbox\MindboxRequest $request)

Абстрактный метод для отправки запроса, должен быть реализован в дочерних классах.



* Visibility: **protected**
* This method is **abstract**.
* This method is defined by [Mindbox\HttpClients\AbstractHttpClient](Mindbox-HttpClients-AbstractHttpClient.md)


#### Arguments
* $request **[Mindbox\MindboxRequest](Mindbox-MindboxRequest.md)** - &lt;p&gt;Экземпляр запроса.&lt;/p&gt;



### getOptions

    array Mindbox\HttpClients\StreamHttpClient::getOptions(string $method, string $body, array $headers)

Формирование массива параметров запроса.



* Visibility: **private**


#### Arguments
* $method **string** - &lt;p&gt;HTTP метод запроса.&lt;/p&gt;
* $body **string** - &lt;p&gt;Тело запроса.&lt;/p&gt;
* $headers **array** - &lt;p&gt;Заголовки запроса.&lt;/p&gt;



### compileHeader

    string Mindbox\HttpClients\StreamHttpClient::compileHeader(array $headers)

Компиляция заголовков запроса в формат, понятный MindboxStream.



* Visibility: **private**


#### Arguments
* $headers **array** - &lt;p&gt;Исходный массив заголовков.&lt;/p&gt;



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
* This method is defined by [Mindbox\HttpClients\AbstractHttpClient](Mindbox-HttpClients-AbstractHttpClient.md)


#### Arguments
* $method **string** - &lt;p&gt;HTTP метод отправки запроса.&lt;/p&gt;


