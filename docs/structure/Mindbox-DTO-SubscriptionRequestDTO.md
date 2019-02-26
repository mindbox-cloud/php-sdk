Mindbox\DTO\SubscriptionRequestDTO
===============

Class SubscriptionRequestDTO




* Class name: SubscriptionRequestDTO
* Namespace: Mindbox\DTO
* Parent class: [Mindbox\DTO\SubscriptionDTO](Mindbox-DTO-SubscriptionDTO.md)



Constants
----------


### XML_ITEM_NAME_INDEX

    const XML_ITEM_NAME_INDEX = '@itemName'





Properties
----------


### $xmlName

    protected string $xmlName = 'dto'





* Visibility: **protected**
* This property is **static**.


### $DTOMap

    protected array $DTOMap = array()





* Visibility: **protected**
* This property is **static**.


### $items

    protected array $items = array()





* Visibility: **protected**


### $valueByDefault

    public string $valueByDefault





* Visibility: **public**


### $pointOfContact

    public string $pointOfContact





* Visibility: **public**
* This property is defined by [Mindbox\DTO\SubscriptionDTO](Mindbox-DTO-SubscriptionDTO.md)


### $topic

    public string $topic





* Visibility: **public**
* This property is defined by [Mindbox\DTO\SubscriptionDTO](Mindbox-DTO-SubscriptionDTO.md)


### $isSubscribed

    public string $isSubscribed





* Visibility: **public**
* This property is defined by [Mindbox\DTO\SubscriptionDTO](Mindbox-DTO-SubscriptionDTO.md)


### $brand

    public string $brand





* Visibility: **public**
* This property is defined by [Mindbox\DTO\SubscriptionDTO](Mindbox-DTO-SubscriptionDTO.md)


Methods
-------


### setPointOfContact

    mixed Mindbox\DTO\SubscriptionRequestDTO::setPointOfContact(mixed $pointOfContact)





* Visibility: **public**


#### Arguments
* $pointOfContact **mixed**



### setTopic

    mixed Mindbox\DTO\SubscriptionRequestDTO::setTopic(mixed $topic)





* Visibility: **public**


#### Arguments
* $topic **mixed**



### setIsSubscribed

    mixed Mindbox\DTO\SubscriptionRequestDTO::setIsSubscribed(mixed $isSubscribed)





* Visibility: **public**


#### Arguments
* $isSubscribed **mixed**



### setBrand

    mixed Mindbox\DTO\SubscriptionRequestDTO::setBrand(mixed $brand)





* Visibility: **public**


#### Arguments
* $brand **mixed**



### getValueByDefault

    string Mindbox\DTO\SubscriptionRequestDTO::getValueByDefault()





* Visibility: **public**




### setValueByDefault

    mixed Mindbox\DTO\SubscriptionRequestDTO::setValueByDefault(mixed $valueByDefault)





* Visibility: **public**


#### Arguments
* $valueByDefault **mixed**



### getPointOfContact

    string Mindbox\DTO\SubscriptionDTO::getPointOfContact()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\SubscriptionDTO](Mindbox-DTO-SubscriptionDTO.md)




### getTopic

    string Mindbox\DTO\SubscriptionDTO::getTopic()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\SubscriptionDTO](Mindbox-DTO-SubscriptionDTO.md)




### getIsSubscribed

    string Mindbox\DTO\SubscriptionDTO::getIsSubscribed()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\SubscriptionDTO](Mindbox-DTO-SubscriptionDTO.md)




### getBrand

    string Mindbox\DTO\SubscriptionDTO::getBrand()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\SubscriptionDTO](Mindbox-DTO-SubscriptionDTO.md)




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


