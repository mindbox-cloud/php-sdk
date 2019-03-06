Mindbox\Responses\MindboxCustomerProcessingStatusResponse
===============

Класс, расширяющий стандартный класс ответа от Mindbox и используемый в стандартных запросах на отправку кода
подтверждения.

Class MindboxCustomerProcessingStatusResponse


* Class name: MindboxCustomerProcessingStatusResponse
* Namespace: Mindbox\Responses
* Parent class: [Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)



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


### getProcessingStatus

    string|null Mindbox\Responses\MindboxCustomerProcessingStatusResponse::getProcessingStatus()

Возвращает статус потребителя, если он присутствует в ответе.



* Visibility: **public**




### __construct

    mixed Mindbox\MindboxResponse::__construct(integer $httpCode, array $headers, array $body, string $rawBody, \Mindbox\MindboxRequest $request)

Конструктор MindboxResponse.



* Visibility: **public**
* This method is defined by [Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)


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
* This method is defined by [Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)




### getBody

    array Mindbox\MindboxResponse::getBody()

Геттер для $body.



* Visibility: **public**
* This method is defined by [Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)




### getMindboxStatus

    string|null Mindbox\MindboxResponse::getMindboxStatus()

Возвращает статус операции Mindbox.



* Visibility: **public**
* This method is defined by [Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)




### getResult

    \Mindbox\DTO\ResultDTO Mindbox\MindboxResponse::getResult()

Возвращает тело ответа в виде экземпляра DTO.



* Visibility: **public**
* This method is defined by [Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)




### getValidationErrors

    \Mindbox\DTO\V3\Responses\ValidationMessageResponseCollection|null Mindbox\MindboxResponse::getValidationErrors()

Возвращает ошибки валидации в виде DTO, если такие присутствуют в ответе.



* Visibility: **public**
* This method is defined by [Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)




### getHttpCode

    integer Mindbox\MindboxResponse::getHttpCode()

Геттер для $httpCode.



* Visibility: **public**
* This method is defined by [Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)




### getHeaders

    array Mindbox\MindboxResponse::getHeaders()

Геттер для $headers.



* Visibility: **public**
* This method is defined by [Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)




### getRawBody

    string Mindbox\MindboxResponse::getRawBody()

Геттер для $rawBody.



* Visibility: **public**
* This method is defined by [Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)




### getRequest

    \Mindbox\MindboxRequest Mindbox\MindboxResponse::getRequest()

Геттер для $request.



* Visibility: **public**
* This method is defined by [Mindbox\MindboxResponse](Mindbox-MindboxResponse.md)



