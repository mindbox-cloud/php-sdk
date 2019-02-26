Mindbox\DTO\OrderRequestDTO
===============

Class OrderRequestDTO




* Class name: OrderRequestDTO
* Namespace: Mindbox\DTO
* Parent class: [Mindbox\DTO\OrderDTO](Mindbox-DTO-OrderDTO.md)



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

    public \Mindbox\DTO\CustomerRequestV2DTO $customer





* Visibility: **public**


### $discounts

    public \Mindbox\DTO\DiscountRequestCollection $discounts





* Visibility: **public**


### $deliveryCost

    public string $deliveryCost





* Visibility: **public**


### $customFields

    public array $customFields





* Visibility: **public**


### $lines

    public \Mindbox\DTO\LineRequestCollection $lines





* Visibility: **public**


### $payments

    public \Mindbox\DTO\PaymentRequestCollection $payments





* Visibility: **public**


### $ids

    public array $ids





* Visibility: **public**
* This property is defined by [Mindbox\DTO\OrderDTO](Mindbox-DTO-OrderDTO.md)


### $pointOfContact

    public string $pointOfContact





* Visibility: **public**
* This property is defined by [Mindbox\DTO\OrderDTO](Mindbox-DTO-OrderDTO.md)


### $area

    public string $area





* Visibility: **public**
* This property is defined by [Mindbox\DTO\OrderDTO](Mindbox-DTO-OrderDTO.md)


Methods
-------


### setPointOfContact

    mixed Mindbox\DTO\OrderRequestDTO::setPointOfContact(mixed $pointOfContact)





* Visibility: **public**


#### Arguments
* $pointOfContact **mixed**



### setArea

    mixed Mindbox\DTO\OrderRequestDTO::setArea(mixed $area)





* Visibility: **public**


#### Arguments
* $area **mixed**



### getLines

    \Mindbox\DTO\LineRequestCollection Mindbox\DTO\OrderRequestDTO::getLines()





* Visibility: **public**




### setLines

    mixed Mindbox\DTO\OrderRequestDTO::setLines(array|\Mindbox\DTO\LineRequestCollection $lines)





* Visibility: **public**


#### Arguments
* $lines **array|[array](Mindbox-DTO-LineRequestCollection.md)**



### getPayments

    \Mindbox\DTO\PaymentRequestCollection Mindbox\DTO\OrderRequestDTO::getPayments()





* Visibility: **public**




### setPayments

    mixed Mindbox\DTO\OrderRequestDTO::setPayments(array|\Mindbox\DTO\PaymentRequestCollection $payments)





* Visibility: **public**


#### Arguments
* $payments **array|[array](Mindbox-DTO-PaymentRequestCollection.md)**



### getCustomer

    \Mindbox\DTO\CustomerRequestV2DTO Mindbox\DTO\OrderRequestDTO::getCustomer()





* Visibility: **public**




### setCustomer

    mixed Mindbox\DTO\OrderRequestDTO::setCustomer(array|\Mindbox\DTO\CustomerRequestV2DTO $customer)





* Visibility: **public**


#### Arguments
* $customer **array|[array](Mindbox-DTO-CustomerRequestV2DTO.md)**



### getDiscounts

    \Mindbox\DTO\DiscountRequestCollection Mindbox\DTO\OrderRequestDTO::getDiscounts()





* Visibility: **public**




### setDiscounts

    mixed Mindbox\DTO\OrderRequestDTO::setDiscounts(array|\Mindbox\DTO\DiscountRequestCollection $discounts)





* Visibility: **public**


#### Arguments
* $discounts **array|[array](Mindbox-DTO-DiscountRequestCollection.md)**



### getDeliveryCost

    string Mindbox\DTO\OrderRequestDTO::getDeliveryCost()





* Visibility: **public**




### setDeliveryCost

    mixed Mindbox\DTO\OrderRequestDTO::setDeliveryCost(mixed $deliveryCost)





* Visibility: **public**


#### Arguments
* $deliveryCost **mixed**



### setId

    mixed Mindbox\DTO\OrderRequestDTO::setId(string $name, mixed $value)





* Visibility: **public**


#### Arguments
* $name **string**
* $value **mixed**



### setIds

    mixed Mindbox\DTO\OrderRequestDTO::setIds(array $ids)





* Visibility: **public**


#### Arguments
* $ids **array**



### setCustomField

    mixed Mindbox\DTO\OrderRequestDTO::setCustomField(mixed $name, mixed $value)





* Visibility: **public**


#### Arguments
* $name **mixed**
* $value **mixed**



### setCustomFields

    mixed Mindbox\DTO\OrderRequestDTO::setCustomFields(array $fields)





* Visibility: **public**


#### Arguments
* $fields **array**



### getPointOfContact

    string Mindbox\DTO\OrderDTO::getPointOfContact()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\OrderDTO](Mindbox-DTO-OrderDTO.md)




### getArea

    string Mindbox\DTO\OrderDTO::getArea()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\OrderDTO](Mindbox-DTO-OrderDTO.md)




### getId

    string|null Mindbox\DTO\OrderDTO::getId(string $name)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\OrderDTO](Mindbox-DTO-OrderDTO.md)


#### Arguments
* $name **string**



### getIds

    mixed Mindbox\DTO\OrderDTO::getIds()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\OrderDTO](Mindbox-DTO-OrderDTO.md)




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


