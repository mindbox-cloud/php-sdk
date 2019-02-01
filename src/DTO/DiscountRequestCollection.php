<?php


namespace Mindbox\DTO;

/**
 * Class DiscountRequestCollection
 *
 * @package Mindbox\DTO
 */
class DiscountRequestCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = DiscountRequestDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'discounts';
}
