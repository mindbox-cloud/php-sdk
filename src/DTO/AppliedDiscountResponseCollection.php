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
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = AppliedDiscountResponseDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'appliedDiscounts';
}
