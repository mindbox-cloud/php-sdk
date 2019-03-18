Mindbox\XMLHelper\MindboxXMLSerializer
===============

Class MindboxXMLSerializer




* Class name: MindboxXMLSerializer
* Namespace: Mindbox\XMLHelper







Methods
-------


### fromArrayToXML

    string Mindbox\XMLHelper\MindboxXMLSerializer::fromArrayToXML(string $name, array $data)

Генерация xml строки из массива данных.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $name **string**
* $data **array**



### getXML

    \SimpleXMLElement Mindbox\XMLHelper\MindboxXMLSerializer::getXML(\SimpleXMLElement $xml, array $data)

Рекурсивно конвертирует массив в xml.



* Visibility: **private**
* This method is **static**.


#### Arguments
* $xml **SimpleXMLElement**
* $data **array**



### getKey

    string Mindbox\XMLHelper\MindboxXMLSerializer::getKey(mixed $key, mixed $data)

Возвращает ключ для элемента xml.



* Visibility: **private**
* This method is **static**.


#### Arguments
* $key **mixed**
* $data **mixed**



### fromXMLToArray

    array Mindbox\XMLHelper\MindboxXMLSerializer::fromXMLToArray(string $xmlString)

Генерирует массив из строки xml.



* Visibility: **public**


#### Arguments
* $xmlString **string**



### normalizeArray

    array Mindbox\XMLHelper\MindboxXMLSerializer::normalizeArray(array $data)

Приводит массив, сформированный из xml, к общему виду с аналогичным массивом, сформированным из json.

Это необходимо для универсальной обработки массива вне зависимости от формата общения с Mindbox.

* Visibility: **private**


#### Arguments
* $data **array**


