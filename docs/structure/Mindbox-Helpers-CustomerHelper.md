Mindbox\Helpers\CustomerHelper
===============

Хелпер, являющий обёрткой над универсальным запросом. Содержит методы для отправки запросов, связанных с
действиями над потребителем.

Class CustomerHelper


* Class name: CustomerHelper
* Namespace: Mindbox\Helpers
* Parent class: [Mindbox\Helpers\AbstractMindboxHelper](Mindbox-Helpers-AbstractMindboxHelper.md)





Properties
----------


### $client

    protected \Mindbox\Clients\AbstractMindboxClient $client





* Visibility: **protected**


Methods
-------


### authorize

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::authorize(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.AuthorizeCustomer:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### checkByPhone

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::checkByPhone(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.CheckCustomerByMobilePhone:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### checkByMail

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::checkByMail(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.CheckCustomerByEmail:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### register

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::register(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.RegisterCustomer:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### edit

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::edit(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.EditCustomer:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### fill

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::fill(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.FillCustomerProfile:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### getDataByDiscountCard

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::getDataByDiscountCard(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.GetCustomerDataByDiscountCard:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### merge

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::merge(\Mindbox\DTO\MergeCustomersRequestDTO $customersToMerge, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.MergeCustomers:



* Visibility: **public**


#### Arguments
* $customersToMerge **[Mindbox\DTO\MergeCustomersRequestDTO](Mindbox-DTO-MergeCustomersRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные объединяемых
потребителей для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в
запросе DeviceUUID.&lt;/p&gt;



### checkActive

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::checkActive(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.CheckCustomerIsInLoyalityProgram:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### getBonusPointsHistory

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::getBonusPointsHistory(\Mindbox\DTO\CustomerRequestDTO $customer, \Mindbox\DTO\PageRequestDTO $page, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.GetCustomerBonusPointsHistory:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $page **[Mindbox\DTO\PageRequestDTO](Mindbox-DTO-PageRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные пагинации для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### sendAuthorizationCode

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::sendAuthorizationCode(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID, boolean $isSync)

Выполняет вызов стандартной операции Website.SendMobilePhoneAuthorizationCode:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;
* $isSync **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости выполнять запрос
синхронно/асинхронно.&lt;/p&gt;



### checkAuthorizationCode

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::checkAuthorizationCode(\Mindbox\DTO\CustomerRequestDTO $customer, string $authentificationCode, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.CheckMobilePhoneAuthorizationCode:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $authentificationCode **string** - &lt;p&gt;Код аутентификации.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### resendConfirmationCode

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::resendConfirmationCode(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID, boolean $isSync)

Выполняет вызов стандартной операции Website.ResendMobilePhoneConfirmationCode:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;
* $isSync **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости выполнять запрос
синхронно/асинхронно.&lt;/p&gt;



### confirmMobile

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::confirmMobile(\Mindbox\DTO\CustomerRequestDTO $customer, \Mindbox\DTO\SmsConfirmationRequestDTO $smsConfirmation, string $operationName, boolean $addDeviceUUID, boolean $isSync)

Выполняет вызов стандартной операции Website.ConfirmMobilePhone:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для
запроса.&lt;/p&gt;
* $smsConfirmation **[Mindbox\DTO\SmsConfirmationRequestDTO](Mindbox-DTO-SmsConfirmationRequestDTO.md)** - &lt;p&gt;Объект, содержащий код подтверждения.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в
запросе DeviceUUID.&lt;/p&gt;
* $isSync **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости выполнять запрос
синхронно/асинхронно.&lt;/p&gt;



### subscribe

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::subscribe(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID, boolean $isSync)

Выполняет вызов стандартной операции Website.SubscribeCustomer:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;
* $isSync **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости выполнять запрос
синхронно/асинхронно.&lt;/p&gt;



### autoConfirmMobile

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::autoConfirmMobile(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.AutoConfirmMobilePhone:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
* $addDeviceUUID **boolean** - &lt;p&gt;Флаг, сообщающий о необходимости передать в запросе
DeviceUUID.&lt;/p&gt;



### getBalance

    \Mindbox\Clients\AbstractMindboxClient Mindbox\Helpers\CustomerHelper::getBalance(\Mindbox\DTO\CustomerRequestDTO $customer, string $operationName, boolean $addDeviceUUID)

Выполняет вызов стандартной операции Website.GetCustomerBalance:



* Visibility: **public**


#### Arguments
* $customer **[Mindbox\DTO\CustomerRequestDTO](Mindbox-DTO-CustomerRequestDTO.md)** - &lt;p&gt;Объект, содержащий данные потребителя для запроса.&lt;/p&gt;
* $operationName **string** - &lt;p&gt;Название операции.&lt;/p&gt;
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



