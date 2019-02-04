Mindbox\DTO\CustomerResponseDTO
===============

Class MergeCustomersRequestDTO




* Class name: CustomerResponseDTO
* Namespace: Mindbox\DTO
* Parent class: [Mindbox\DTO\CustomerIdentityResponseDTO](Mindbox-DTO-CustomerIdentityResponseDTO.md)



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


### 

    public string 

timeZoneSource



* Visibility: **public**


Methods
-------


### getProcessingStatus

    string Mindbox\DTO\CustomerIdentityResponseDTO::getProcessingStatus()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\CustomerIdentityResponseDTO](Mindbox-DTO-CustomerIdentityResponseDTO.md)




### getSex

    string Mindbox\DTO\CustomerResponseDTO::getSex()





* Visibility: **public**




### getArea

    \Mindbox\DTO\AreaResponseDTO Mindbox\DTO\CustomerResponseDTO::getArea()





* Visibility: **public**




### getSubscriptions

    \Mindbox\DTO\SubscriptionResponseCollection Mindbox\DTO\CustomerResponseDTO::getSubscriptions()





* Visibility: **public**




### getIsEmailInvalid

    string Mindbox\DTO\CustomerResponseDTO::getIsEmailInvalid()





* Visibility: **public**




### getIsEmailConfirmed

    string Mindbox\DTO\CustomerResponseDTO::getIsEmailConfirmed()





* Visibility: **public**




### getPendingEmail

    string Mindbox\DTO\CustomerResponseDTO::getPendingEmail()





* Visibility: **public**




### getIsMobilePhoneInvalid

    string Mindbox\DTO\CustomerResponseDTO::getIsMobilePhoneInvalid()





* Visibility: **public**




### getIsMobilePhoneConfirmed

    string Mindbox\DTO\CustomerResponseDTO::getIsMobilePhoneConfirmed()





* Visibility: **public**




### getPendingMobilePhone

    string Mindbox\DTO\CustomerResponseDTO::getPendingMobilePhone()





* Visibility: **public**




### getChangeDateTimeUtc

    string Mindbox\DTO\CustomerResponseDTO::getChangeDateTimeUtc()





* Visibility: **public**




### getStatus

    string Mindbox\DTO\CustomerResponseDTO::getStatus()





* Visibility: **public**




### getDiscountCards

    \Mindbox\DTO\DiscountCardResponseCollection Mindbox\DTO\CustomerResponseDTO::getDiscountCards()





* Visibility: **public**




### getIanaTimeZone

    string Mindbox\DTO\CustomerResponseDTO::getIanaTimeZone()





* Visibility: **public**




### getTimeZoneSource

    string Mindbox\DTO\CustomerResponseDTO::getTimeZoneSource()





* Visibility: **public**




### getEmail

    string Mindbox\DTO\CustomerResponseDTO::getEmail()





* Visibility: **public**




### getMobilePhone

    string Mindbox\DTO\CustomerResponseDTO::getMobilePhone()





* Visibility: **public**




### getLastName

    string Mindbox\DTO\CustomerResponseDTO::getLastName()





* Visibility: **public**




### getFirstName

    string Mindbox\DTO\CustomerResponseDTO::getFirstName()





* Visibility: **public**




### getMiddleName

    string Mindbox\DTO\CustomerResponseDTO::getMiddleName()





* Visibility: **public**




### getBirthDate

    string Mindbox\DTO\CustomerResponseDTO::getBirthDate()





* Visibility: **public**




### getCustomField

    string|null Mindbox\DTO\CustomerResponseDTO::getCustomField($name)





* Visibility: **public**


#### Arguments
* $name **mixed**



### getCustomFields

    array Mindbox\DTO\CustomerResponseDTO::getCustomFields()





* Visibility: **public**




### getId

    string|null Mindbox\DTO\CustomerIdentityDTO::getId($name)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\CustomerIdentityDTO](Mindbox-DTO-CustomerIdentityDTO.md)


#### Arguments
* $name **mixed**



### getIds

    array Mindbox\DTO\CustomerIdentityDTO::getIds()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\CustomerIdentityDTO](Mindbox-DTO-CustomerIdentityDTO.md)




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

    array Mindbox\DTO\DTO::unsetMetaInfo(array $value)

Рекурсивно убирает из переданного массив мета-информацию.



* Visibility: **private**
* This method is defined by [Mindbox\DTO\DTO](Mindbox-DTO-DTO.md)


#### Arguments
* $value **array** - &lt;p&gt;Массив данных.&lt;/p&gt;



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


