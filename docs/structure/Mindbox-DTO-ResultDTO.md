Mindbox\DTO\ResultDTO
===============

Class ResultDTO




* Class name: ResultDTO
* Namespace: Mindbox\DTO
* Parent class: [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)



Constants
----------


### XML_ITEM_NAME_INDEX

    const XML_ITEM_NAME_INDEX = '@itemName'





Properties
----------


### $DTOMap

    protected array $DTOMap = array()





* Visibility: **protected**
* This property is **static**.


### $xmlName

    protected string $xmlName = 'dto'





* Visibility: **protected**
* This property is **static**.


### $items

    protected array $items = array()





* Visibility: **protected**


### $status

    public string $status





* Visibility: **public**


### $validationMessages

    public \Mindbox\DTO\ValidationMessageResponseCollection $validationMessages





* Visibility: **public**


### $customer

    public \Mindbox\DTO\CustomerResponseDTO $customer





* Visibility: **public**


### $smsConfirmation

    public \Mindbox\DTO\SmsConfirmationResponseDTO $smsConfirmation





* Visibility: **public**


### $customersToMerge

    public \Mindbox\DTO\CustomerIdentityResponseCollection $customersToMerge





* Visibility: **public**


### $resultingCustomer

    public \Mindbox\DTO\CustomerIdentityResponseDTO $resultingCustomer





* Visibility: **public**


### $orders

    public \Mindbox\DTO\OrderResponseCollection $orders





* Visibility: **public**


### $customerActions

    public \Mindbox\DTO\CustomerActionResponseCollection $customerActions





* Visibility: **public**


### $customerSegmentations

    public \Mindbox\DTO\CustomerSegmentationResponseCollection $customerSegmentations





* Visibility: **public**


### $productList

    public \Mindbox\DTO\ProductListItemResponseCollection $productList





* Visibility: **public**


### $balances

    public \Mindbox\DTO\BalanceResponseCollection $balances





* Visibility: **public**


### $totalCount

    public string $totalCount





* Visibility: **public**


Methods
-------


### getStatus

    string Mindbox\DTO\ResultDTO::getStatus()





* Visibility: **public**




### getValidationMessages

    \Mindbox\DTO\ValidationMessageResponseCollection Mindbox\DTO\ResultDTO::getValidationMessages()





* Visibility: **public**




### getCustomer

    \Mindbox\DTO\CustomerResponseDTO Mindbox\DTO\ResultDTO::getCustomer()





* Visibility: **public**




### getSmsConfirmation

    \Mindbox\DTO\SmsConfirmationResponseDTO Mindbox\DTO\ResultDTO::getSmsConfirmation()





* Visibility: **public**




### getCustomersToMerge

    \Mindbox\DTO\CustomerIdentityResponseCollection Mindbox\DTO\ResultDTO::getCustomersToMerge()





* Visibility: **public**




### getResultingCustomer

    \Mindbox\DTO\CustomerIdentityResponseDTO Mindbox\DTO\ResultDTO::getResultingCustomer()





* Visibility: **public**




### getOrders

    \Mindbox\DTO\OrderResponseCollection Mindbox\DTO\ResultDTO::getOrders()





* Visibility: **public**




### getOrder

    \Mindbox\DTO\OrderResponseDTO Mindbox\DTO\ResultDTO::getOrder()





* Visibility: **public**




### getCustomerActions

    \Mindbox\DTO\CustomerActionResponseCollection Mindbox\DTO\ResultDTO::getCustomerActions()





* Visibility: **public**




### getCustomerActionsCount

    string Mindbox\DTO\ResultDTO::getCustomerActionsCount()





* Visibility: **public**




### getCustomerSegmentations

    \Mindbox\DTO\CustomerSegmentationResponseCollection Mindbox\DTO\ResultDTO::getCustomerSegmentations()





* Visibility: **public**




### getProductList

    \Mindbox\DTO\ProductListItemResponseCollection Mindbox\DTO\ResultDTO::getProductList()





* Visibility: **public**




### getBalances

    \Mindbox\DTO\BalanceResponseCollection Mindbox\DTO\ResultDTO::getBalances()





* Visibility: **public**




### getTotalCount

    string Mindbox\DTO\ResultDTO::getTotalCount()





* Visibility: **public**




### __construct

    mixed Mindbox\DTO\DTO::__construct(array $data)

Конструктор DTO.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $data **array** - &lt;p&gt;Массив данных.&lt;/p&gt;



### getDTOMap

    array Mindbox\DTO\DTO::getDTOMap()

Геттер для $DTOMap.



* Visibility: **public**
* This method is **static**.
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)




### makeDTO

    mixed Mindbox\DTO\DTO::makeDTO(string $name, mixed $data)

Инициализация объекта DTO по его имени.



* Visibility: **protected**
* This method is **static**.
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $name **string** - &lt;p&gt;Имя класса DTO.&lt;/p&gt;
* $data **mixed** - &lt;p&gt;Данные.&lt;/p&gt;



### getField

    mixed Mindbox\DTO\DTO::getField(string $name, mixed $default)

Возвращает значение поля DTO по его имени.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $name **string** - &lt;p&gt;Имя поля DTO.&lt;/p&gt;
* $default **mixed** - &lt;p&gt;Значение по умолчанию, будет возвращено в случае, если такое поле отсутствует.&lt;/p&gt;



### setField

    void Mindbox\DTO\DTO::setField(string $name, mixed $value)

Устанавливает в DTO поле с переданным названием.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $name **string** - &lt;p&gt;Название.&lt;/p&gt;
* $value **mixed** - &lt;p&gt;Значение.&lt;/p&gt;



### getFieldNames

    array Mindbox\DTO\DTO::getFieldNames()

Возвращает список всех ключей массив полей DTO.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)




### all

    array Mindbox\DTO\DTO::all()

Возвращает все поля DTO.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)




### toJson

    string Mindbox\DTO\DTO::toJson(integer $options)

Возвращает все поля DTO в формате JSON.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $options **integer**



### unsetMetaInfo

    array Mindbox\DTO\DTO::unsetMetaInfo(mixed $value)

Рекурсивно убирает из переданного массив мета-информацию.



* Visibility: **private**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $value **mixed** - &lt;p&gt;Массив данных.&lt;/p&gt;



### toXML

    string Mindbox\DTO\DTO::toXML()

Возвращает все поля DTO в формате XML.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)




### getXmlName

    string Mindbox\DTO\DTO::getXmlName()

Геттер для $xmlName.



* Visibility: **public**
* This method is **static**.
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)




### getFieldsAsArray

    array Mindbox\DTO\DTO::getFieldsAsArray(boolean $unsetXmlMetaInfo)

Возвращает все поля DTO в виде массива.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $unsetXmlMetaInfo **boolean** - &lt;p&gt;Флаг, сообщающий о том нужно ли очищать мета-информацию.&lt;/p&gt;



### count

    integer Mindbox\DTO\DTO::count()

Возвращает количество элементов, модержащихся в DTO.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)




### getIterator

    \ArrayIterator Mindbox\DTO\DTO::getIterator()

Возвращает ArrayIterator.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)




### offsetGet

    mixed Mindbox\DTO\DTO::offsetGet(mixed $key)

Возвращает элемент DTO по заданному ключу.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $key **mixed** - &lt;p&gt;Ключ.&lt;/p&gt;



### offsetExists

    boolean Mindbox\DTO\DTO::offsetExists(mixed $key)

Проверяет, существует ли заданный ключ в элементах DTO.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $key **mixed**



### offsetSet

    void Mindbox\DTO\DTO::offsetSet(mixed $key, mixed $value)

Устанавливает заданное значение по переданному ключу в элементы DTO.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $key **mixed**
* $value **mixed**



### offsetUnset

    void Mindbox\DTO\DTO::offsetUnset(string $key)

Удаляет заданное значение из элементов DTO по ключу.



* Visibility: **public**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $key **string** - &lt;p&gt;Ключ.&lt;/p&gt;


