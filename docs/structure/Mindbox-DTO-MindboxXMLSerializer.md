Mindbox\DTO\MindboxXMLSerializer
===============

Class MindboxXMLSerializer




* Class name: MindboxXMLSerializer
* Namespace: Mindbox\DTO







Methods
-------


### fromArrayToXML

    string Mindbox\DTO\MindboxXMLSerializer::fromArrayToXML(string $name, array $data)

Generate XML string from array.



* Visibility: **public**
* This method is **static**.


#### Arguments
* $name **string**
* $data **array**



### getXML

    \SimpleXMLElement Mindbox\DTO\MindboxXMLSerializer::getXML(\SimpleXMLElement $xml, array $data)

Recursively format array as XML.



* Visibility: **private**
* This method is **static**.


#### Arguments
* $xml **SimpleXMLElement**
* $data **array**



### getKey

    string Mindbox\DTO\MindboxXMLSerializer::getKey(mixed $key, mixed $data)

Return XML key for node.



* Visibility: **private**
* This method is **static**.


#### Arguments
* $key **mixed**
* $data **mixed**



### fromXMLToArray

    array Mindbox\DTO\MindboxXMLSerializer::fromXMLToArray(string $xmlString)

Generate array from XML string.



* Visibility: **public**


#### Arguments
* $xmlString **string**



### normalizeArray

    array Mindbox\DTO\MindboxXMLSerializer::normalizeArray(array $data)

Format array to "look like json". Necessary for correct generation of json and xml from an array.



* Visibility: **private**


#### Arguments
* $data **array**


