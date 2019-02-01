<?php


namespace Mindbox\DTO;

/**
 * Class CategoryResponseCollection
 *
 * @package Mindbox\DTO
 */
class CategoryResponseCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = CategoryResponseDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'categories';
}
