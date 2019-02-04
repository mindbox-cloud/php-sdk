Mindbox\HttpClients\CurlHttpClient
===============

Класс, реализующий абстрактные методы AbstractHttpClient для отправки HTTP запросов при помощи cURL.

http://php.net/manual/ru/book.curl.php
Class CurlHttpClient


* Class name: CurlHttpClient
* Namespace: Mindbox\HttpClients
* Parent class: [Mindbox\HttpClients\AbstractHttpClient](Mindbox-HttpClients-AbstractHttpClient.md)



Constants
----------


### DEFAULT_CONNECTION_TIMEOUT

    const DEFAULT_CONNECTION_TIMEOUT = 5





Properties
----------


### $curl

    protected \Mindbox\HttpClients\MindboxCurl $curl





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

    array Mindbox\HttpClients\CurlHttpClient::getOptions(string $url, string $method, string $body, array $headers)

Компиляция массива параметров запроса для cURL.



* Visibility: **private**


#### Arguments
* $url **string** - &lt;p&gt;URL запроса.&lt;/p&gt;
* $method **string** - &lt;p&gt;HTTP метод запроса.&lt;/p&gt;
* $body **string** - &lt;p&gt;Тело запроса.&lt;/p&gt;
* $headers **array** - &lt;p&gt;Заголовки запроса.&lt;/p&gt;



### compileHeader

    array Mindbox\HttpClients\CurlHttpClient::compileHeader(array $headers)

Компиляция заголовков запроса в формат, понятный cURL.



* Visibility: **private**


#### Arguments
* $headers **array** - &lt;p&gt;Исходный массив заголовков.&lt;/p&gt;



### extractResponseHeadersAndBody

    array Mindbox\HttpClients\CurlHttpClient::extractResponseHeadersAndBody(string $content)

Извлечение заголовков и тела ответа в массив из двух частей.



* Visibility: **private**


#### Arguments
* $content **string** - &lt;p&gt;Исходная строка ответа.&lt;/p&gt;



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


