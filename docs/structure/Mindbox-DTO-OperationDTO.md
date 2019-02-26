Mindbox\DTO\OperationDTO
===============

Class OperationDTO




* Class name: OperationDTO
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


### $customer

    public \Mindbox\DTO\CustomerRequestDTO $customer





* Visibility: **public**


### $authentificationCode

    public string $authentificationCode





* Visibility: **public**


### $smsConfirmation

    public \Mindbox\DTO\SmsConfirmationRequestDTO $smsConfirmation





* Visibility: **public**


### $mergeCustomers

    public \Mindbox\DTO\MergeCustomersRequestDTO $mergeCustomers





* Visibility: **public**


### $page

    public \Mindbox\DTO\PageRequestDTO $page





* Visibility: **public**


### $productList

    public \Mindbox\DTO\ProductListItemRequestCollection $productList





* Visibility: **public**


### $addProductToList

    public \Mindbox\DTO\AddProductToListRequestDTO $addProductToList





* Visibility: **public**


### $removeProductFromList

    public \Mindbox\DTO\RemoveProductFromListRequestDTO $removeProductFromList





* Visibility: **public**


### $setProductCountInList

    public \Mindbox\DTO\SetProductCountInListRequestDTO $setProductCountInList





* Visibility: **public**


Methods
-------


### getCustomer

    \Mindbox\DTO\CustomerRequestDTO Mindbox\DTO\OperationDTO::getCustomer()





* Visibility: **public**




### setCustomer

    mixed Mindbox\DTO\OperationDTO::setCustomer(array|\Mindbox\DTO\CustomerIdentityRequestDTO $customer)





* Visibility: **public**


#### Arguments
* $customer **array|[array](Mindbox-DTO-CustomerIdentityRequestDTO.md)**



### getAuthentificationCode

    string Mindbox\DTO\OperationDTO::getAuthentificationCode()





* Visibility: **public**




### setAuthentificationCode

    mixed Mindbox\DTO\OperationDTO::setAuthentificationCode(mixed $code)





* Visibility: **public**


#### Arguments
* $code **mixed**



### getSmsConfirmation

    \Mindbox\DTO\SmsConfirmationRequestDTO Mindbox\DTO\OperationDTO::getSmsConfirmation()





* Visibility: **public**




### setSmsConfirmation

    mixed Mindbox\DTO\OperationDTO::setSmsConfirmation(array|\Mindbox\DTO\SmsConfirmationRequestDTO $smsConfirmation)





* Visibility: **public**


#### Arguments
* $smsConfirmation **array|[array](Mindbox-DTO-SmsConfirmationRequestDTO.md)**



### getPage

    \Mindbox\DTO\PageRequestDTO Mindbox\DTO\OperationDTO::getPage()





* Visibility: **public**




### setPage

    mixed Mindbox\DTO\OperationDTO::setPage(array|\Mindbox\DTO\PageRequestDTO $page)





* Visibility: **public**


#### Arguments
* $page **array|[array](Mindbox-DTO-PageRequestDTO.md)**



### getProductList

    \Mindbox\DTO\ProductListItemRequestCollection Mindbox\DTO\OperationDTO::getProductList()





* Visibility: **public**




### setProductList

    mixed Mindbox\DTO\OperationDTO::setProductList(array|\Mindbox\DTO\ProductListItemRequestCollection $productList)





* Visibility: **public**


#### Arguments
* $productList **array|[array](Mindbox-DTO-ProductListItemRequestCollection.md)**



### getAddProductToList

    \Mindbox\DTO\AddProductToListRequestDTO Mindbox\DTO\OperationDTO::getAddProductToList()





* Visibility: **public**




### setAddProductToList

    mixed Mindbox\DTO\OperationDTO::setAddProductToList(array|\Mindbox\DTO\AddProductToListRequestDTO $addProductToList)





* Visibility: **public**


#### Arguments
* $addProductToList **array|[array](Mindbox-DTO-AddProductToListRequestDTO.md)**



### getRemoveProductFromList

    \Mindbox\DTO\RemoveProductFromListRequestDTO Mindbox\DTO\OperationDTO::getRemoveProductFromList()





* Visibility: **public**




### setRemoveProductFromList

    mixed Mindbox\DTO\OperationDTO::setRemoveProductFromList(array|\Mindbox\DTO\RemoveProductFromListRequestDTO $removeProductFromList)





* Visibility: **public**


#### Arguments
* $removeProductFromList **array|[array](Mindbox-DTO-RemoveProductFromListRequestDTO.md)**



### getSetProductCountInList

    \Mindbox\DTO\SetProductCountInListRequestDTO Mindbox\DTO\OperationDTO::getSetProductCountInList()





* Visibility: **public**




### setSetProductCountInList

    mixed Mindbox\DTO\OperationDTO::setSetProductCountInList(array|\Mindbox\DTO\SetProductCountInListRequestDTO $setProductCountInList)





* Visibility: **public**


#### Arguments
* $setProductCountInList **array|[array](Mindbox-DTO-SetProductCountInListRequestDTO.md)**



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


