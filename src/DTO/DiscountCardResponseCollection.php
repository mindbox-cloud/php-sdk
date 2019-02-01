<?php


namespace Mindbox\DTO;

/**
 * Class DiscountCardResponseCollection
 *
 * @package Mindbox\DTO
 */
class DiscountCardResponseCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = DiscountCardResponseDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'discountCards';
}
