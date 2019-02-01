<?php


namespace Mindbox\DTO;

use SimpleXMLElement;

/**
 * Class MindboxXMLSerializer
 *
 * @package Mindbox\DTO
 */
class MindboxXMLSerializer
{
    /**
     * Generate XML string from array.
     *
     * @param string $name
     * @param array  $data
     *
     * @return string
     */
    public static function fromArrayToXML($name, array $data)
    {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><' . $name . '></' . $name . '>');

        return self::getXML($xml, $data)->asXML();
    }

    /**
     * Recursively format array as XML.
     *
     * @param SimpleXMLElement $xml
     * @param array            $data
     *
     * @return SimpleXMLElement
     */
    private static function getXML(&$xml, array $data)
    {
        foreach ($data as $key => $value) {
            if ($key === DTO::XML_ITEM_NAME_INDEX) {
                continue;
            }
            $key = self::getKey($key, $data);
            if (is_array($value)) {
                $subNode = $xml->addChild($key);
                self::getXML($subNode, $value);
            } else {
                $xml->addChild($key, $value);
            }
        }

        return $xml;
    }

    /**
     * Return XML key for node.
     *
     * @param mixed $key
     * @param mixed $data
     *
     * @return string
     */
    private static function getKey($key, $data)
    {

        if (!is_numeric($key)) {
            return $key;
        }
        if (is_array($data) && isset($data[DTO::XML_ITEM_NAME_INDEX])) {
            return $data[DTO::XML_ITEM_NAME_INDEX];
        }

        return 'value';
    }

    /**
     * Generate array from XML string.
     *
     * @param string $xmlString
     *
     * @return array
     */
    public function fromXMLToArray($xmlString)
    {
        $xml = simplexml_load_string($xmlString, "SimpleXMLElement", LIBXML_NOCDATA);

        $name  = $xml->getName();
        $array = json_decode(json_encode($xml), true);

        return [$name => $this->normalizeArray($array)];
    }

    /**
     * Format array to "look like json". Necessary for correct generation of json and xml from an array.
     *
     * @param array $data
     *
     * @return array
     */
    private function normalizeArray($data)
    {
        foreach ($data as $parentKey => &$value) {
            if (is_array($value)) {
                $unsetFlag = false;
                foreach ($value as $key => $item) {
                    if (is_numeric($key) && is_array($item)) {
                        $data[]    = $item;
                        $unsetFlag = true;
                    }
                }
                if ($unsetFlag) {
                    unset($data[$parentKey]);
                    $data[DTO::XML_ITEM_NAME_INDEX] = $parentKey;
                }
                $value = $this->normalizeArray($value);
            }
        }

        return $data;
    }
}
