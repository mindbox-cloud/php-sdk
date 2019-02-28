Mindbox\HttpClients\HttpClientFactory
===============

Класс, отвечающий за инициализацию HTTP клиента, согласно пользовательской конфигурации.

Class HttpClientFactory


* Class name: HttpClientFactory
* Namespace: Mindbox\HttpClients







Methods
-------


### createHttpClient

    \Mindbox\HttpClients\IHttpClient Mindbox\HttpClients\HttpClientFactory::createHttpClient(integer|null $timeout, string|null $handlerName)

Метод, который инициализирует и возвращает объект HTTP клиента, согласно переданным параметрам.



* Visibility: **public**


#### Arguments
* $timeout **integer|null** - &lt;p&gt;Таймаут соединения.&lt;/p&gt;
* $handlerName **string|null** - &lt;p&gt;Имя клиента (&#039;curl&#039;|&#039;stream&#039;).&lt;/p&gt;



### detectDefaultClient

    \Mindbox\HttpClients\IHttpClient Mindbox\HttpClients\HttpClientFactory::detectDefaultClient(integer|null $timeout)

Определение и инициализация клиента по умолчанию.

При наличиии расширения cURL возвращает экземпляр CurlHttpClient, иначе StreamHttpClient.

* Visibility: **private**


#### Arguments
* $timeout **integer|null** - &lt;p&gt;Таймаут соединения.&lt;/p&gt;



### isCurlLoaded

    boolean Mindbox\HttpClients\HttpClientFactory::isCurlLoaded()

Метод, инкапсулирующий проверку наличия раширения cURL. Позволяет создать заглушку для тестирования вне
зависимости от реального окружения.



* Visibility: **protected**



