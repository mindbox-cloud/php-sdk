Mindbox\DTO\V2\Responses\CustomerResponseDTO
===============

Class CustomerResponseDTO




* Class name: CustomerResponseDTO
* Namespace: Mindbox\DTO\V2\Responses
* Parent class: [Mindbox\DTO\V2\Responses\CustomerIdentityResponseDTO](Mindbox-DTO-V2-Responses-CustomerIdentityResponseDTO.md)



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


### $processingStatus

    public string $processingStatus





* Visibility: **public**


### $sex

    public string $sex





* Visibility: **public**


### $isEmailInvalid

    public string $isEmailInvalid





* Visibility: **public**


### $isEmailConfirmed

    public string $isEmailConfirmed





* Visibility: **public**


### $pendingEmail

    public string $pendingEmail





* Visibility: **public**


### $isMobilePhoneInvalid

    public string $isMobilePhoneInvalid





* Visibility: **public**


### $isMobilePhoneConfirmed

    public string $isMobilePhoneConfirmed





* Visibility: **public**


### $pendingMobilePhone

    public string $pendingMobilePhone





* Visibility: **public**


### $area

    public \Mindbox\DTO\V2\Responses\AreaResponseDTO $area





* Visibility: **public**


### $subscriptions

    public \Mindbox\DTO\V2\Responses\SubscriptionResponseCollection $subscriptions





* Visibility: **public**


### $changeDateTimeUtc

    public string $changeDateTimeUtc





* Visibility: **public**


### $status

    public string $status





* Visibility: **public**


### $discountCards

    public \Mindbox\DTO\V2\Responses\DiscountCardResponseCollection $discountCards





* Visibility: **public**


### $ianaTimeZone

    public string $ianaTimeZone





* Visibility: **public**


### $timeZoneSource

    public string $timeZoneSource





* Visibility: **public**


### $ids

    public array $ids





* Visibility: **public**
* This property is defined by [Mindbox\DTO\V2\CustomerIdentityDTO](Mindbox-DTO-V2-CustomerIdentityDTO.md)


Methods
-------


### getProcessingStatus

    string Mindbox\DTO\V2\Responses\CustomerIdentityResponseDTO::getProcessingStatus()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Responses\CustomerIdentityResponseDTO](Mindbox-DTO-V2-Responses-CustomerIdentityResponseDTO.md)




### getSex

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getSex()





* Visibility: **public**




### getArea

    \Mindbox\DTO\V2\Responses\AreaResponseDTO Mindbox\DTO\V2\Responses\CustomerResponseDTO::getArea()





* Visibility: **public**




### getSubscriptions

    \Mindbox\DTO\V2\Responses\SubscriptionResponseCollection Mindbox\DTO\V2\Responses\CustomerResponseDTO::getSubscriptions()





* Visibility: **public**




### getIsEmailInvalid

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getIsEmailInvalid()





* Visibility: **public**




### getIsEmailConfirmed

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getIsEmailConfirmed()





* Visibility: **public**




### getPendingEmail

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getPendingEmail()





* Visibility: **public**




### getIsMobilePhoneInvalid

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getIsMobilePhoneInvalid()





* Visibility: **public**




### getIsMobilePhoneConfirmed

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getIsMobilePhoneConfirmed()





* Visibility: **public**




### getPendingMobilePhone

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getPendingMobilePhone()





* Visibility: **public**




### getChangeDateTimeUtc

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getChangeDateTimeUtc()





* Visibility: **public**




### getStatus

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getStatus()





* Visibility: **public**




### getDiscountCards

    \Mindbox\DTO\V2\Responses\DiscountCardResponseCollection Mindbox\DTO\V2\Responses\CustomerResponseDTO::getDiscountCards()





* Visibility: **public**




### getIanaTimeZone

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getIanaTimeZone()





* Visibility: **public**




### getTimeZoneSource

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getTimeZoneSource()





* Visibility: **public**




### getEmail

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getEmail()





* Visibility: **public**




### getMobilePhone

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getMobilePhone()





* Visibility: **public**




### getLastName

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getLastName()





* Visibility: **public**




### getFirstName

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getFirstName()





* Visibility: **public**




### getMiddleName

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getMiddleName()





* Visibility: **public**




### getBirthDate

    string Mindbox\DTO\V2\Responses\CustomerResponseDTO::getBirthDate()





* Visibility: **public**




### getCustomField

    string|null Mindbox\DTO\V2\Responses\CustomerResponseDTO::getCustomField(string $name)





* Visibility: **public**


#### Arguments
* $name **string**



### getCustomFields

    mixed Mindbox\DTO\V2\Responses\CustomerResponseDTO::getCustomFields()





* Visibility: **public**




### getId

    string|null Mindbox\DTO\V2\CustomerIdentityDTO::getId(string $name)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\CustomerIdentityDTO](Mindbox-DTO-V2-CustomerIdentityDTO.md)


#### Arguments
* $name **string**



### getIds

    mixed Mindbox\DTO\V2\CustomerIdentityDTO::getIds()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\CustomerIdentityDTO](Mindbox-DTO-V2-CustomerIdentityDTO.md)




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


