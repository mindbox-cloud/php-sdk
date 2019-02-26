Mindbox\DTO\MindboxXMLSerializer
===============

Class MindboxXMLSerializer




* Class name: MindboxXMLSerializer
* Namespace: Mindbox\DTO







Methods
-------


### fromArrayToXML

    string Mindbox\DTO\MindboxXMLSerializer::fromArrayToXML(string $name, array $data)

Генерация xml строки из массива данных.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $name **string**
* $data **array**



### getXML

    \SimpleXMLElement Mindbox\DTO\MindboxXMLSerializer::getXML(\SimpleXMLElement $xml, array $data)

Рекурсивно конвертирует массив в xml.



* Visibility: **private**
* This method is **static**.


#### Arguments
* $xml **SimpleXMLElement**
* $data **array**



### getKey

    string Mindbox\DTO\MindboxXMLSerializer::getKey(mixed $key, mixed $data)

Возвращает ключ для элемента xml.



* Visibility: **private**
* This method is **static**.


#### Arguments
* $key **mixed**
* $data **mixed**



### fromXMLToArray

    array Mindbox\DTO\MindboxXMLSerializer::fromXMLToArray(string $xmlString)

Генерирует массив из строки xml.



* Visibility: **public**


#### Arguments
* $xmlString **string**



### normalizeArray

    array Mindbox\DTO\MindboxXMLSerializer::normalizeArray(array $data)

Приводит массив, сформированный из xml, к общему виду с аналогичным массивом, сформированным из json.

Это необходимо для универсальной обработки массива вне зависимости от формата общения с Mindbox.

* Visibility: **private**


#### Arguments
* $data **array**


