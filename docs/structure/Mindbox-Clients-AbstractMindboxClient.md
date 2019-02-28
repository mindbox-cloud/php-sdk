Mindbox\Clients\AbstractMindboxClient
===============

Абстрактный класс, содержащий реализацию общих методов обработки запросов для различных версий API.

Class AbstractMindboxClient


* Class name: AbstractMindboxClient
* Namespace: Mindbox\Clients
* This is an **abstract** class



Constants
----------


### API_VERSION

    const API_VERSION = ''





Properties
----------


### $secretKey

    protected string $secretKey





* Visibility: **protected**


### $httpClient

    protected \Mindbox\HttpClients\IHttpClient $httpClient





* Visibility: **protected**


### $logger

    protected \Psr\Log\LoggerInterface $logger





* Visibility: **protected**


### $lastResponse

    protected \Mindbox\MindboxResponse $lastResponse





* Visibility: **protected**


### $preparedRequest

    protected \Mindbox\MindboxRequest $preparedRequest





* Visibility: **protected**


### $responseType

    protected string $responseType





* Visibility: **protected**


Methods
-------


### __construct

    mixed Mindbox\Clients\AbstractMindboxClient::__construct(string $secretKey, \Mindbox\HttpClients\IHttpClient $httpClient, \Psr\Log\LoggerInterface $logger)

Конструктор AbstractMindboxClient.



* Visibility: **public**


#### Arguments
* $secretKey **string** - &lt;p&gt;Секретный ключ.&lt;/p&gt;
* $httpClient **[Mindbox\HttpClients\IHttpClient](Mindbox-HttpClients-IHttpClient.md)** - &lt;p&gt;Экземпляр HTTP клиента.&lt;/p&gt;
* $logger **Psr\Log\LoggerInterface** - &lt;p&gt;Экземпляр логгера.&lt;/p&gt;



### prepareRequest

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Clients\AbstractMindboxClient::prepareRequest(string $method, string $operationName, \Mindbox\DTO\DTO|null $body, string $additionalUrl, array $queryParams, boolean $isSync, boolean $addDeviceUUID)

Метод формирует объект запроса и записывает в $preparedRequest.



* Visibility: **public**


#### Arguments
* $method **string** - &lt;p&gt;HTTP метод.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $body **[Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)|null** - &lt;p&gt;Тело запроса в виде DTO.&lt;/p&gt;
* $additionalUrl **string** - &lt;p&gt;Дополнительный URL запроса.&lt;/p&gt;
* $queryParams **array** - &lt;p&gt;GET параметры запроса.&lt;/p&gt;
* $isSync **boolean** - &lt;p&gt;Флаг: синхронный/асинхронный запрос.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг: добавлять ли в запрос DeviceUUID.&lt;/p&gt;



### setRequest

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Clients\AbstractMindboxClient::setRequest(\Mindbox\MindboxRequest $request)

Сеттер для $preparedRequest.



* Visibility: **public**


#### Arguments
* $request **[Mindbox\MindboxRequest](Mindbox-MindboxRequest.md)**



### getRequest

    \Mindbox\MindboxRequest Mindbox\Clients\AbstractMindboxClient::getRequest()

Геттер для $preparedRequest.



* Visibility: **public**




### sendRequest

    \Mindbox\MindboxResponse Mindbox\Clients\AbstractMindboxClient::sendRequest()

Передача подготовленного запроса в HTTP клиент для отправки, обработка ответа.



* Visibility: **public**




### prepareQueryParams

    array Mindbox\Clients\AbstractMindboxClient::prepareQueryParams(string $operation, array $queryParams, boolean $addDeviceUUID)

Абстрактный метод по формированию массива GET параметров запроса.



* Visibility: **protected**
* This method is **abstract**.


#### Arguments
* $operation **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $queryParams **array** - &lt;p&gt;GET параметры, переданные пользователем.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг: добавлять ли в запрос DeviceUUID.&lt;/p&gt;



### prepareUrl

    string Mindbox\Clients\AbstractMindboxClient::prepareUrl(string $additionalUrl, array $queryParams, boolean $isSync)

Абстрактный метод по формированию полного URL запроса.



* Visibility: **protected**
* This method is **abstract**.


#### Arguments
* $additionalUrl **string** - &lt;p&gt;Дополнительный URL запроса.&lt;/p&gt;
* $queryParams **array** - &lt;p&gt;GET параметры, переданные пользователем.&lt;/p&gt;
* $isSync **boolean** - &lt;p&gt;Флаг: синхронный/асинхронный запрос.&lt;/p&gt;



### prepareHeaders

    array Mindbox\Clients\AbstractMindboxClient::prepareHeaders(boolean $addDeviceUUID)

Подготовка массива заголовков запроса.



* Visibility: **protected**


#### Arguments
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг: добавлять ли в запрос DeviceUUID.&lt;/p&gt;



### prepareAuthorizationHeader

    string Mindbox\Clients\AbstractMindboxClient::prepareAuthorizationHeader()

Абстрактный метод по формированию содержимого заголовка Authorization.



* Visibility: **protected**
* This method is **abstract**.




### prepareBody

    string Mindbox\Clients\AbstractMindboxClient::prepareBody(\Mindbox\DTO\DTO|null $body)

Конвертация тела запроса в формат, пригодный для HTTP клиента (json, xml).



* Visibility: **protected**
* This method is **abstract**.


#### Arguments
* $body **[Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)|null** - &lt;p&gt;Тело запроса в виде DTO.&lt;/p&gt;



### createRequest

    \Mindbox\MindboxRequest Mindbox\Clients\AbstractMindboxClient::createRequest(string $url, string $method, string $body, array $headers)

Инициализация экземпляра запроса.



* Visibility: **protected**


#### Arguments
* $url **string** - &lt;p&gt;Полный URL запроса.&lt;/p&gt;
* $method **string** - &lt;p&gt;Метод запроса.&lt;/p&gt;
* $body **string** - &lt;p&gt;Тело запроса.&lt;/p&gt;
* $headers **array** - &lt;p&gt;Заголовки запроса.&lt;/p&gt;



### parseRawResponse

    \Mindbox\MindboxResponse Mindbox\Clients\AbstractMindboxClient::parseRawResponse(\Mindbox\MindboxRequest $request, \Mindbox\HttpClients\HttpClientRawResponse $rawResponse)

Парсинг и первичная обработка сырого ответа от HTTP клиента:
- запись результата запроса в лог;
- генерация исключения при наличии ошибки в ответе;
- инициализация экземпляра MindboxResponse, содержащего отформатированные данные ответа.



* Visibility: **protected**


#### Arguments
* $request **[Mindbox\MindboxRequest](Mindbox-MindboxRequest.md)** - &lt;p&gt;Экземпляр запроса.&lt;/p&gt;
* $rawResponse **[Mindbox\HttpClients\HttpClientRawResponse](Mindbox-HttpClients-HttpClientRawResponse.md)** - &lt;p&gt;Экземпляр сырого ответа.&lt;/p&gt;



### setLastResponse

    mixed Mindbox\Clients\AbstractMindboxClient::setLastResponse(\Mindbox\MindboxResponse $response)

Сеттер для $lastResponse.



* Visibility: **private**


#### Arguments
* $response **[Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)**



### getLastResponse

    \Mindbox\MindboxResponse Mindbox\Clients\AbstractMindboxClient::getLastResponse()

Геттер для $lastResponse.



* Visibility: **public**




### prepareResponseBody

    array Mindbox\Clients\AbstractMindboxClient::prepareResponseBody(string $rawBody)

Конвертация тела ответа в массив.



* Visibility: **protected**
* This method is **abstract**.


#### Arguments
* $rawBody **string** - &lt;p&gt;Сырое тело ответа.&lt;/p&gt;



### prepareContext

    array Mindbox\Clients\AbstractMindboxClient::prepareContext(\Mindbox\MindboxResponse $response)

Подготовка контекста запроса для логгера.



* Visibility: **private**


#### Arguments
* $response **[Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)** - &lt;p&gt;Ответ от Mindbox.&lt;/p&gt;



### setResponseType

    mixed Mindbox\Clients\AbstractMindboxClient::setResponseType(string $type)

Сеттер для responseType.



* Visibility: **public**


#### Arguments
* $type **string** - &lt;p&gt;Имя потомка MindboxResponse.&lt;/p&gt;


