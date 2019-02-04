Mindbox\Helpers\OrderHelper
===============

Хелпер, являющий обёрткой над универсальным запросом. Содержит методы для отправки запросов, связанных с
процессингом заказов.

Class OrderHelper


* Class name: OrderHelper
* Namespace: Mindbox\Helpers
* Parent class: [Mindbox\Helpers\AbstractMindboxHelper](Mindbox-Helpers-AbstractMindboxHelper.md)





Properties
----------


### $client

    protected \Mindbox\Clients\AbstractMindboxClient $client





* Visibility: **protected**


Methods
-------


### calculateCart

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\OrderHelper::calculateCart(\Mindbox\DTO\PreorderRequestDTO $order, string $operationName)

Выполняет вызов стандартной операции Website.CalculateCart:



* Visibility: **public**


#### Arguments
* $order **[Mindbox\DTO\PreorderRequestDTO](Mindbox-DTO-PreorderRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные корзины для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;



### createOrder

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\OrderHelper::createOrder(\Mindbox\DTO\OrderCreateRequestDTO $order, string $operationName)

Выполняет вызов стандартной операции Website.CreateOrder:



* Visibility: **public**


#### Arguments
* $order **[Mindbox\DTO\OrderCreateRequestDTO](Mindbox-DTO-OrderCreateRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные корзины для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;



### confirmOrder

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\OrderHelper::confirmOrder(\Mindbox\DTO\OrderUpdateRequestDTO $order, string $operationName)

Выполняет вызов стандартной операции Website.ConfirmOrder:



* Visibility: **public**


#### Arguments
* $order **[Mindbox\DTO\OrderUpdateRequestDTO](Mindbox-DTO-OrderUpdateRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные корзины для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;



### cancelOrder

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\OrderHelper::cancelOrder(\Mindbox\DTO\OrderUpdateRequestDTO $order, string $operationName)

Выполняет вызов стандартной операции Website.CancelOrder:



* Visibility: **public**


#### Arguments
* $order **[Mindbox\DTO\OrderUpdateRequestDTO](Mindbox-DTO-OrderUpdateRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные корзины для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;



### offlineOrder

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\OrderHelper::offlineOrder(\Mindbox\DTO\OrderUpdateRequestDTO $order, string $operationName)

Выполняет вызов стандартной операции Website.OfflineOrder:



* Visibility: **public**


#### Arguments
* $order **[Mindbox\DTO\OrderUpdateRequestDTO](Mindbox-DTO-OrderUpdateRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные корзины для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;



### getOrders

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\OrderHelper::getOrders(integer $countToReturn, string $mindbox, integer $startingIndex, string $operationName)

Выполняет вызов стандартной операции Website.GetCustomerOrders:



* Visibility: **public**


#### Arguments
* $countToReturn **integer** - &lt;p&gt;Максимальное количество заказов для возврата.&lt;/p&gt;
* $mindbox **string** - &lt;p&gt;Идентификатор потребителя.&lt;/p&gt;
* $startingIndex **integer** - &lt;p&gt;Порядковый номер заказа, начиная с которого будет сформирован список заказов.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;



### __construct

    mixed Mindbox\Helpers\AbstractMindboxHelper::__construct(\Mindbox\Clients\AbstractMindboxClient $client)

Конструктор AbstractMindboxHelper.



* Visibility: **public**
* This method is defined by [Mindbox\Helpers\AbstractMindboxHelper](Mindbox-Helpers-AbstractMindboxHelper.md)


#### Arguments
* $client **[Mindbox\Clients\AbstractMindboxClient](Mindbox-Clients-AbstractMindboxClient.md)** - &lt;p&gt;Экземпляр клиента Mindbox.&lt;/p&gt;



### createOperation

    \Mindbox\DTO\OperationDTO Mindbox\Helpers\AbstractMindboxHelper::createOperation()

Инициализация объекта OperationDTO.



* Visibility: **protected**
* This method is defined by [Mindbox\Helpers\AbstractMindboxHelper](Mindbox-Helpers-AbstractMindboxHelper.md)




### getLastResponse

    \Mindbox\MindboxResponse Mindbox\Helpers\AbstractMindboxHelper::getLastResponse()

Возвращает экземпляр последнего ответа от Mindbox.



* Visibility: **public**
* This method is defined by [Mindbox\Helpers\AbstractMindboxHelper](Mindbox-Helpers-AbstractMindboxHelper.md)




### sendRequest

    \Mindbox\MindboxResponse Mindbox\Helpers\AbstractMindboxHelper::sendRequest()





* Visibility: **public**
* This method is defined by [Mindbox\Helpers\AbstractMindboxHelper](Mindbox-Helpers-AbstractMindboxHelper.md)




### getRequest

    \Mindbox\MindboxRequest Mindbox\Helpers\AbstractMindboxHelper::getRequest()





* Visibility: **public**
* This method is defined by [Mindbox\Helpers\AbstractMindboxHelper](Mindbox-Helpers-AbstractMindboxHelper.md)



