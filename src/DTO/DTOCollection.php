<?php


namespace Mindbox\DTO;

/**
 * Class DTOCollection
 *
 * @package Mindbox\DTO
 */
class DTOCollection extends DTO
{
    /**
     * @var string Name of collections`s fields for xml generation.
     */
    protected static $collectionItemsName = DTO::class;

    /**
     * DTOCollection constructor.
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $items               = [];
        $collectionItemsName = static::getCollectionMap();
        $itemName            = $collectionItemsName::getXmlName();
        if (isset($data[$itemName]) && is_array($data[$itemName])) {
            foreach ($data[$itemName] as $key => $datum) {
                if (is_numeric($key)) {
                    $data = $data[$itemName];
                    break;
                }
            }
        }
        foreach ($data as $key => $value) {
            if ($key === static::XML_ITEM_NAME_INDEX) {
                continue;
            }
            $items[] = static::makeDTO($collectionItemsName, $value);
        }
        $items[static::XML_ITEM_NAME_INDEX] = $itemName;

        parent::__construct($items);
    }

    /**
     * Getter for $collectionItemsName.
     *
     * @return string
     */
    public static function getCollectionMap()
    {
        return static::$collectionItemsName;
    }
}
