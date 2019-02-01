<?php


namespace Mindbox\DTO;

/**
 * Class DiscountInfoResponseCollection
 *
 * @package Mindbox\DTO
 */
class DiscountInfoResponseCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = DiscountInfoResponseDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'discountsInfo';
}
