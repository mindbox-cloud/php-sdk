<?php


namespace Mindbox\DTO;

/**
 * Class ContentItemResponseCollection
 *
 * @package Mindbox\DTO
 */
class ContentItemResponseCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = ContentItemResponseDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'content';
}
