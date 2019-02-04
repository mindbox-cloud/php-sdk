Mindbox\Helpers\ProductListHelper
===============

Хелпер, являющий обёрткой над универсальным запросом. Содержит методы для отправки запросов, связанных с изменением
списка продуктов в корзине.

Class CartHelper


* Class name: ProductListHelper
* Namespace: Mindbox\Helpers
* Parent class: [Mindbox\Helpers\AbstractMindboxHelper](Mindbox-Helpers-AbstractMindboxHelper.md)





Properties
----------


### $client

    protected \Mindbox\Clients\AbstractMindboxClient $client





* Visibility: **protected**


Methods
-------


### addToCart

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\ProductListHelper::addToCart(\Mindbox\DTO\AddProductToListRequestDTO $product, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.AddToCart:



* Visibility: **public**


#### Arguments
* $product **[Mindbox\DTO\AddProductToListRequestDTO](Mindbox-DTO-AddProductToListRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные продукта для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### removeFromCart

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\ProductListHelper::removeFromCart(\Mindbox\DTO\RemoveProductFromListRequestDTO $product, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.RemoveFromCart:



* Visibility: **public**


#### Arguments
* $product **[Mindbox\DTO\RemoveProductFromListRequestDTO](Mindbox-DTO-RemoveProductFromListRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные продукта для
запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в
запросе DeviceUUID.&lt;/p&gt;



### setProductCount

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\ProductListHelper::setProductCount(\Mindbox\DTO\SetProductCountInListRequestDTO $product, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.SetProductCount:



* Visibility: **public**


#### Arguments
* $product **[Mindbox\DTO\SetProductCountInListRequestDTO](Mindbox-DTO-SetProductCountInListRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные продукта для
запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в
запросе DeviceUUID.&lt;/p&gt;



### setProductList

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\ProductListHelper::setProductList(\Mindbox\DTO\ProductListItemRequestCollection $products, string $operationName, \Mindbox\DTO\CustomerIdentityRequestDTO|null $customerIdentity, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.SetProductList:



* Visibility: **public**


#### Arguments
* $products **[Mindbox\DTO\ProductListItemRequestCollection](Mindbox-DTO-ProductListItemRequestCollection.md)** - &lt;p&gt;Объект, содержащий данные списка
продуктов
для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $customerIdentity **[Mindbox\DTO\CustomerIdentityRequestDTO](Mindbox-DTO-CustomerIdentityRequestDTO.md)|null** - &lt;p&gt;Объект, содержащий данные потребителя для
запроса.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать
в запросе DeviceUUID.&lt;/p&gt;



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



