Mindbox\HttpClients\IHttpClient
===============

Интерфейс, объявляющий основные методы для отправки HTTP запросов.

Interface IHttpClient


* Interface name: IHttpClient
* Namespace: Mindbox\HttpClients
* This is an **interface**






Methods
-------


### send

    \Mindbox\HttpClients\HttpClientRawResponse Mindbox\HttpClients\IHttpClient::send(\Mindbox\MindboxRequest $request)

Базовый метод отправки HTTP запроса, который должен быть реализован в каждом HTTP клиенте.



* Visibility: **public**


#### Arguments
* $request **[Mindbox\MindboxRequest](Mindbox-MindboxRequest.md)** - &lt;p&gt;Экземпляр запроса.&lt;/p&gt;


