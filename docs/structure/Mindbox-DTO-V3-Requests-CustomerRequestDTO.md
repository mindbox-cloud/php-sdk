Mindbox\DTO\V3\Requests\CustomerRequestDTO
===============

Class CustomerRequestDTO




* Class name: CustomerRequestDTO
* Namespace: Mindbox\DTO\V3\Requests
* Parent class: [Mindbox\DTO\V3\Requests\CustomerIdentityRequestDTO](Mindbox-DTO-V3-Requests-CustomerIdentityRequestDTO.md)



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


### $fullName

    public string $fullName





* Visibility: **public**


### $password

    public string $password





* Visibility: **public**


### $area

    public \Mindbox\DTO\V3\Requests\AreaRequestDTO $area





* Visibility: **public**


### $subscriptions

    public \Mindbox\DTO\V3\Requests\SubscriptionRequestCollection $subscriptions





* Visibility: **public**


### $authenticationTicket

    public string $authenticationTicket





* Visibility: **public**


### $ids

    public array $ids





* Visibility: **public**
* This property is defined by [Mindbox\DTO\V3\CustomerIdentityDTO](Mindbox-DTO-V3-CustomerIdentityDTO.md)


Methods
-------


### getFullName

    string Mindbox\DTO\V3\Requests\CustomerRequestDTO::getFullName()





* Visibility: **public**




### getArea

    \Mindbox\DTO\V3\Requests\AreaRequestDTO Mindbox\DTO\V3\Requests\CustomerRequestDTO::getArea()





* Visibility: **public**




### getSubscriptions

    \Mindbox\DTO\V3\Requests\SubscriptionRequestCollection Mindbox\DTO\V3\Requests\CustomerRequestDTO::getSubscriptions()





* Visibility: **public**




### getAuthenticationTicket

    string Mindbox\DTO\V3\Requests\CustomerRequestDTO::getAuthenticationTicket()





* Visibility: **public**




### setAuthenticationTicket

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setAuthenticationTicket(mixed $authenticationTicket)





* Visibility: **public**


#### Arguments
* $authenticationTicket **mixed**



### setEmail

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setEmail(mixed $email)





* Visibility: **public**


#### Arguments
* $email **mixed**



### setMobilePhone

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setMobilePhone(mixed $phone)





* Visibility: **public**


#### Arguments
* $phone **mixed**



### setLastName

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setLastName(mixed $lastName)





* Visibility: **public**


#### Arguments
* $lastName **mixed**



### setFirstName

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setFirstName(mixed $firstName)





* Visibility: **public**


#### Arguments
* $firstName **mixed**



### setMiddleName

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setMiddleName(mixed $middleName)





* Visibility: **public**


#### Arguments
* $middleName **mixed**



### setFullName

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setFullName(mixed $fullName)





* Visibility: **public**


#### Arguments
* $fullName **mixed**



### setBirthDate

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setBirthDate(mixed $birthDate)





* Visibility: **public**


#### Arguments
* $birthDate **mixed**



### getPassword

    string Mindbox\DTO\V3\Requests\CustomerRequestDTO::getPassword()





* Visibility: **public**




### setPassword

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setPassword(mixed $password)





* Visibility: **public**


#### Arguments
* $password **mixed**



### setArea

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setArea(array|\Mindbox\DTO\V3\Requests\AreaRequestDTO $area)





* Visibility: **public**


#### Arguments
* $area **array|[array](Mindbox-DTO-V3-Requests-AreaRequestDTO.md)**



### setSubscriptions

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setSubscriptions(array|\Mindbox\DTO\V3\Requests\SubscriptionRequestCollection $subscriptions)





* Visibility: **public**


#### Arguments
* $subscriptions **array|[array](Mindbox-DTO-V3-Requests-SubscriptionRequestCollection.md)**



### getDiscountCard

    \Mindbox\DTO\V3\Requests\DiscountCardIdentityRequestDTO Mindbox\DTO\V3\Requests\CustomerRequestDTO::getDiscountCard()





* Visibility: **public**




### setDiscountCard

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setDiscountCard(array|\Mindbox\DTO\V3\Requests\DiscountCardIdentityRequestDTO $discountCard)





* Visibility: **public**


#### Arguments
* $discountCard **array|[array](Mindbox-DTO-V3-Requests-DiscountCardIdentityRequestDTO.md)**



### getEmail

    string Mindbox\DTO\V3\Requests\CustomerRequestDTO::getEmail()





* Visibility: **public**




### getMobilePhone

    string Mindbox\DTO\V3\Requests\CustomerRequestDTO::getMobilePhone()





* Visibility: **public**




### getLastName

    string Mindbox\DTO\V3\Requests\CustomerRequestDTO::getLastName()





* Visibility: **public**




### getFirstName

    string Mindbox\DTO\V3\Requests\CustomerRequestDTO::getFirstName()





* Visibility: **public**




### getMiddleName

    string Mindbox\DTO\V3\Requests\CustomerRequestDTO::getMiddleName()





* Visibility: **public**




### getBirthDate

    string Mindbox\DTO\V3\Requests\CustomerRequestDTO::getBirthDate()





* Visibility: **public**




### setCustomField

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setCustomField(mixed $name, mixed $value)





* Visibility: **public**


#### Arguments
* $name **mixed**
* $value **mixed**



### setCustomFields

    mixed Mindbox\DTO\V3\Requests\CustomerRequestDTO::setCustomFields(array $fields)





* Visibility: **public**


#### Arguments
* $fields **array**



### setId

    mixed Mindbox\DTO\V3\Requests\CustomerIdentityRequestDTO::setId(string $name, mixed $value)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V3\Requests\CustomerIdentityRequestDTO](Mindbox-DTO-V3-Requests-CustomerIdentityRequestDTO.md)


#### Arguments
* $name **string**
* $value **mixed**



### setIds

    mixed Mindbox\DTO\V3\Requests\CustomerIdentityRequestDTO::setIds(array $ids)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V3\Requests\CustomerIdentityRequestDTO](Mindbox-DTO-V3-Requests-CustomerIdentityRequestDTO.md)


#### Arguments
* $ids **array**



### getId

    string|null Mindbox\DTO\V3\CustomerIdentityDTO::getId(string $name)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V3\CustomerIdentityDTO](Mindbox-DTO-V3-CustomerIdentityDTO.md)


#### Arguments
* $name **string**



### getIds

    mixed Mindbox\DTO\V3\CustomerIdentityDTO::getIds()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V3\CustomerIdentityDTO](Mindbox-DTO-V3-CustomerIdentityDTO.md)




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


