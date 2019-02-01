<?php


namespace Mindbox\DTO;

/**
 * Class LineResponseCollection
 *
 * @package Mindbox\DTO
 */
class LineResponseCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = LineResponseDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'lines';
}
