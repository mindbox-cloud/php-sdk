Mindbox\MindboxRequest
===============

Класс, содержащий все данные запроса (url, заголовки, метод, тело) и методы для получения этих данных.

Class MindboxRequest


* Class name: MindboxRequest
* Namespace: Mindbox





Properties
----------


### $apiVersion

    private string $apiVersion





* Visibility: **private**


### $url

    private string $url





* Visibility: **private**


### $method

    private string $method





* Visibility: **private**


### $body

    private string $body





* Visibility: **private**


### $headers

    private array $headers





* Visibility: **private**


Methods
-------


### __construct

    mixed Mindbox\MindboxRequest::__construct(string $apiVersion, string $url, string $method, string $body, array $headers)

Конструктор MindboxRequest.



* Visibility: **public**


#### Arguments
* $apiVersion **string**
* $url **string** - &lt;p&gt;URL запроса.&lt;/p&gt;
* $method **string** - &lt;p&gt;Метод HTTP запроса.&lt;/p&gt;
* $body **string** - &lt;p&gt;Тело запроса.&lt;/p&gt;
* $headers **array** - &lt;p&gt;Заголовки запроса.&lt;/p&gt;



### getApiVersion

    string Mindbox\MindboxRequest::getApiVersion()

Геттер для $apiVersion.



* Visibility: **public**




### getUrl

    string Mindbox\MindboxRequest::getUrl()

Геттер для $url.



* Visibility: **public**




### getMethod

    string Mindbox\MindboxRequest::getMethod()

Геттер для $method.



* Visibility: **public**




### getBody

    string Mindbox\MindboxRequest::getBody()

Геттер для $body.



* Visibility: **public**




### getHeaders

    array Mindbox\MindboxRequest::getHeaders()

Геттер для $headers.



* Visibility: **public**




### getCleanBody

    string Mindbox\MindboxRequest::getCleanBody()

Геттер для тела запроса с зашифрованными персональными данными.



* Visibility: **public**




### __sleep

    array Mindbox\MindboxRequest::__sleep()





* Visibility: **public**




### cleanBody

    string Mindbox\MindboxRequest::cleanBody()

Шифрование пароля потребителя в теле ответа.



* Visibility: **private**




### getCleanHeaders

    array Mindbox\MindboxRequest::getCleanHeaders()

Геттер для заголовков запроса с зашифрованными персональными данными.



* Visibility: **public**




### cleanHeaders

    array Mindbox\MindboxRequest::cleanHeaders()

Удаление секретного ключа из заголовков запроса.



* Visibility: **private**



