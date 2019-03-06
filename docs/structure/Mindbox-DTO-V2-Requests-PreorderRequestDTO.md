Mindbox\DTO\V2\Requests\PreorderRequestDTO
===============

Class PreorderRequestDTO




* Class name: PreorderRequestDTO
* Namespace: Mindbox\DTO\V2\Requests
* Parent class: [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)



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


### $calculationDateTimeUtc

    public string $calculationDateTimeUtc





* Visibility: **public**


### $customer

    public \Mindbox\DTO\V2\Requests\CustomerRequestDTO $customer





* Visibility: **public**
* This property is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


### $discounts

    public \Mindbox\DTO\V2\Requests\DiscountRequestCollection $discounts





* Visibility: **public**
* This property is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


### $deliveryCost

    public string $deliveryCost





* Visibility: **public**
* This property is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


### $customFields

    public array $customFields





* Visibility: **public**
* This property is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


### $lines

    public \Mindbox\DTO\V2\Requests\LineRequestCollection $lines





* Visibility: **public**
* This property is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


### $payments

    public \Mindbox\DTO\V2\Requests\PaymentRequestCollection $payments





* Visibility: **public**
* This property is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


### $ids

    public array $ids





* Visibility: **public**
* This property is defined by [Mindbox\DTO\V2\OrderDTO](Mindbox-DTO-V2-OrderDTO.md)


### $pointOfContact

    public string $pointOfContact





* Visibility: **public**
* This property is defined by [Mindbox\DTO\V2\OrderDTO](Mindbox-DTO-V2-OrderDTO.md)


### $area

    public string $area





* Visibility: **public**
* This property is defined by [Mindbox\DTO\V2\OrderDTO](Mindbox-DTO-V2-OrderDTO.md)


Methods
-------


### getCalculationDateTimeUtc

    string Mindbox\DTO\V2\Requests\PreorderRequestDTO::getCalculationDateTimeUtc()





* Visibility: **public**




### setCalculationDateTimeUtc

    mixed Mindbox\DTO\V2\Requests\PreorderRequestDTO::setCalculationDateTimeUtc(mixed $calculationDateTimeUtc)





* Visibility: **public**


#### Arguments
* $calculationDateTimeUtc **mixed**



### setPointOfContact

    mixed Mindbox\DTO\V2\Requests\OrderRequestDTO::setPointOfContact(mixed $pointOfContact)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


#### Arguments
* $pointOfContact **mixed**



### setArea

    mixed Mindbox\DTO\V2\Requests\OrderRequestDTO::setArea(mixed $area)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


#### Arguments
* $area **mixed**



### getLines

    \Mindbox\DTO\V2\Requests\LineRequestCollection Mindbox\DTO\V2\Requests\OrderRequestDTO::getLines()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)




### setLines

    mixed Mindbox\DTO\V2\Requests\OrderRequestDTO::setLines(array|\Mindbox\DTO\V2\Requests\LineRequestCollection $lines)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


#### Arguments
* $lines **array|[array](Mindbox-DTO-V2-Requests-LineRequestCollection.md)**



### getPayments

    \Mindbox\DTO\V2\Requests\PaymentRequestCollection Mindbox\DTO\V2\Requests\OrderRequestDTO::getPayments()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)




### setPayments

    mixed Mindbox\DTO\V2\Requests\OrderRequestDTO::setPayments(array|\Mindbox\DTO\V2\Requests\PaymentRequestCollection $payments)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


#### Arguments
* $payments **array|[array](Mindbox-DTO-V2-Requests-PaymentRequestCollection.md)**



### getCustomer

    \Mindbox\DTO\V2\Requests\CustomerRequestDTO Mindbox\DTO\V2\Requests\OrderRequestDTO::getCustomer()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)




### setCustomer

    mixed Mindbox\DTO\V2\Requests\OrderRequestDTO::setCustomer(array|\Mindbox\DTO\V2\Requests\CustomerRequestDTO $customer)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


#### Arguments
* $customer **array|[array](Mindbox-DTO-V2-Requests-CustomerRequestDTO.md)**



### getDiscounts

    \Mindbox\DTO\V2\Requests\DiscountRequestCollection Mindbox\DTO\V2\Requests\OrderRequestDTO::getDiscounts()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)




### setDiscounts

    mixed Mindbox\DTO\V2\Requests\OrderRequestDTO::setDiscounts(array|\Mindbox\DTO\V2\Requests\DiscountRequestCollection $discounts)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


#### Arguments
* $discounts **array|[array](Mindbox-DTO-V2-Requests-DiscountRequestCollection.md)**



### getDeliveryCost

    string Mindbox\DTO\V2\Requests\OrderRequestDTO::getDeliveryCost()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)




### setDeliveryCost

    mixed Mindbox\DTO\V2\Requests\OrderRequestDTO::setDeliveryCost(mixed $deliveryCost)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


#### Arguments
* $deliveryCost **mixed**



### setId

    mixed Mindbox\DTO\V2\Requests\OrderRequestDTO::setId(string $name, mixed $value)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


#### Arguments
* $name **string**
* $value **mixed**



### setIds

    mixed Mindbox\DTO\V2\Requests\OrderRequestDTO::setIds(array $ids)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


#### Arguments
* $ids **array**



### setCustomField

    mixed Mindbox\DTO\V2\Requests\OrderRequestDTO::setCustomField(mixed $name, mixed $value)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


#### Arguments
* $name **mixed**
* $value **mixed**



### setCustomFields

    mixed Mindbox\DTO\V2\Requests\OrderRequestDTO::setCustomFields(array $fields)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\Requests\OrderRequestDTO](Mindbox-DTO-V2-Requests-OrderRequestDTO.md)


#### Arguments
* $fields **array**



### getPointOfContact

    string Mindbox\DTO\V2\OrderDTO::getPointOfContact()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\OrderDTO](Mindbox-DTO-V2-OrderDTO.md)




### getArea

    string Mindbox\DTO\V2\OrderDTO::getArea()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\OrderDTO](Mindbox-DTO-V2-OrderDTO.md)




### getId

    string|null Mindbox\DTO\V2\OrderDTO::getId(string $name)





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\OrderDTO](Mindbox-DTO-V2-OrderDTO.md)


#### Arguments
* $name **string**



### getIds

    mixed Mindbox\DTO\V2\OrderDTO::getIds()





* Visibility: **public**
* This method is defined by [Mindbox\DTO\V2\OrderDTO](Mindbox-DTO-V2-OrderDTO.md)




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


