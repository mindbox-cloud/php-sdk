Mindbox\HttpClients\HttpClientRawResponse
===============

Класс, содержащий &quot;сырые&quot; данные ответа от Mindbox API.

Class HttpClientRawResponse


* Class name: HttpClientRawResponse
* Namespace: Mindbox\HttpClients





Properties
----------


### $httpCode

    private integer $httpCode





* Visibility: **private**


### $headers

    private array $headers





* Visibility: **private**


### $body

    private array $body





* Visibility: **private**


Methods
-------


### __construct

    mixed Mindbox\HttpClients\HttpClientRawResponse::__construct(array $headers, string $body)

Конструктор HttpClientRawResponse.



* Visibility: **public**


#### Arguments
* $headers **array** - &lt;p&gt;Заголовки ответа.&lt;/p&gt;
* $body **string** - &lt;p&gt;Тело ответа.&lt;/p&gt;



### getStatusCode

    integer Mindbox\HttpClients\HttpClientRawResponse::getStatusCode()

Геттер для $httpCode.



* Visibility: **public**




### getHeaders

    array Mindbox\HttpClients\HttpClientRawResponse::getHeaders()

Геттер для $headers.



* Visibility: **public**




### setHeadersAndCode

    mixed Mindbox\HttpClients\HttpClientRawResponse::setHeadersAndCode(array $rawHeaders)

Парсинг "сырых" заголовков ответа в удобрчитаемый массив.



* Visibility: **private**


#### Arguments
* $rawHeaders **array** - &lt;p&gt;&quot;Сырые&quot; заголовки ответа.&lt;/p&gt;



### getBody

    string Mindbox\HttpClients\HttpClientRawResponse::getBody()

Геттер для $body.



* Visibility: **public**




### getHttpResponseCodeFromHeader

    integer Mindbox\HttpClients\HttpClientRawResponse::getHttpResponseCodeFromHeader(string $rawResponseHeader)

Получение HTTP кода ответа из "сырых" заголовков.



* Visibility: **private**


#### Arguments
* $rawResponseHeader **string** - &lt;p&gt;&quot;Сырые&quot; заголовки ответа.&lt;/p&gt;


