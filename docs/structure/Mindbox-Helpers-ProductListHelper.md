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

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\ProductListHelper::addToCart(\Mindbox\DTO\V3\Requests\AddProductToListRequestDTO $product, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.AddToCart:



* Visibility: **public**


#### Arguments
* $product **[Mindbox\DTO\V3\Requests\AddProductToListRequestDTO](Mindbox-DTO-V3-Requests-AddProductToListRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные продукта для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе DeviceUUID.&lt;/p&gt;



### removeFromCart

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\ProductListHelper::removeFromCart(\Mindbox\DTO\V3\Requests\RemoveProductFromListRequestDTO $product, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.RemoveFromCart:



* Visibility: **public**


#### Arguments
* $product **[Mindbox\DTO\V3\Requests\RemoveProductFromListRequestDTO](Mindbox-DTO-V3-Requests-RemoveProductFromListRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные продукта для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### setProductCount

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\ProductListHelper::setProductCount(\Mindbox\DTO\V3\Requests\SetProductCountInListRequestDTO $product, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.SetProductCount:



* Visibility: **public**


#### Arguments
* $product **[Mindbox\DTO\V3\Requests\SetProductCountInListRequestDTO](Mindbox-DTO-V3-Requests-SetProductCountInListRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные продукта для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### setProductList

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\ProductListHelper::setProductList(\Mindbox\DTO\V3\Requests\ProductListItemRequestCollection $products, string $operationName, \Mindbox\DTO\V3\Requests\CustomerIdentityRequestDTO|null $customerIdentity, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.SetProductList:



* Visibility: **public**


#### Arguments
* $products **[Mindbox\DTO\V3\Requests\ProductListItemRequestCollection](Mindbox-DTO-V3-Requests-ProductListItemRequestCollection.md)** - &lt;p&gt;Объект, содержащий данные списка продуктов для
запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $customerIdentity **[Mindbox\DTO\V3\Requests\CustomerIdentityRequestDTO](Mindbox-DTO-V3-Requests-CustomerIdentityRequestDTO.md)|null** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



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



