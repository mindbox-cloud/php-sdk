<?php


namespace Mindbox\DTO;

/**
 * Class AppliedDiscountResponseCollection
 *
 * @package Mindbox\DTO
 */
class AppliedDiscountResponseCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = AppliedDiscountResponseDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'appliedDiscounts';
}
