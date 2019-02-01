<?php


namespace Mindbox\DTO;

/**
 * Class CategoryRequestCollection
 *
 * @package Mindbox\DTO
 */
class CategoryRequestCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = CategoryRequestDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'categories';
}
