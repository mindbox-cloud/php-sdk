Mindbox\MindboxResponse
===============

Класс, содержащий данные ответа от Mindbox API и методы для получения этих данных в удобном пользователю виде.

Class MindboxResponse


* Class name: MindboxResponse
* Namespace: Mindbox



Constants
----------


### MINDBOX_SUCCESS_STATUS

    const MINDBOX_SUCCESS_STATUS = 'Success'





Properties
----------


### $httpCode

    protected integer $httpCode





* Visibility: **protected**


### $headers

    protected array $headers





* Visibility: **protected**


### $body

    protected array $body





* Visibility: **protected**


### $rawBody

    protected string $rawBody





* Visibility: **protected**


### $request

    protected \Mindbox\MindboxRequest $request





* Visibility: **protected**


Methods
-------


### __construct

    mixed Mindbox\MindboxResponse::__construct(integer $httpCode, array $headers, array $body, string $rawBody, \Mindbox\MindboxRequest $request)

Конструктор MindboxResponse.



* Visibility: **public**


#### Arguments
* $httpCode **integer** - &lt;p&gt;HTTP код ответа.&lt;/p&gt;
* $headers **array** - &lt;p&gt;Заголовки ответа.&lt;/p&gt;
* $body **array** - &lt;p&gt;Тело ответа в виде массива.&lt;/p&gt;
* $rawBody **string** - &lt;p&gt;&quot;Сырое&quot; тело ответа (xml|json).&lt;/p&gt;
* $request **[Mindbox\MindboxRequest](Mindbox-MindboxRequest.md)** - &lt;p&gt;Экземпляр связанного запроса.&lt;/p&gt;



### isError

    boolean Mindbox\MindboxResponse::isError()

Проверка статуса операции Mindbox.

Возвращает true, если в ответе есть поля errorId или errorMessage.
Возвращает false, если статус ответа совпадает с MINDBOX_SUCCESS_STATUS или статус отсутствует в ответе.
При отличии статуса от MINDBOX_SUCCESS_STATUS возвращает true.

* Visibility: **public**




### getBody

    array Mindbox\MindboxResponse::getBody()

Геттер для $body.



* Visibility: **public**




### getMindboxStatus

    string|null Mindbox\MindboxResponse::getMindboxStatus()

Возвращает статус операции Mindbox.



* Visibility: **public**




### getResult

    \Mindbox\DTO\ResultDTO Mindbox\MindboxResponse::getResult()

Возвращает тело ответа в виде экземпляра DTO.



* Visibility: **public**




### getValidationErrors

    \Mindbox\DTO\V3\Responses\ValidationMessageResponseCollection|null Mindbox\MindboxResponse::getValidationErrors()

Возвращает ошибки валидации в виде DTO, если такие присутствуют в ответе.



* Visibility: **public**




### getHttpCode

    integer Mindbox\MindboxResponse::getHttpCode()

Геттер для $httpCode.



* Visibility: **public**




### getHeaders

    array Mindbox\MindboxResponse::getHeaders()

Геттер для $headers.



* Visibility: **public**




### getRawBody

    string Mindbox\MindboxResponse::getRawBody()

Геттер для $rawBody.



* Visibility: **public**




### getRequest

    \Mindbox\MindboxRequest Mindbox\MindboxResponse::getRequest()

Геттер для $request.



* Visibility: **public**



