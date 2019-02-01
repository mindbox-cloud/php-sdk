<?php


namespace Mindbox\DTO;

/**
 * Class LineRequestCollection
 *
 * @package Mindbox\DTO
 */
class LineRequestCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = LineRequestDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'lines';
}
