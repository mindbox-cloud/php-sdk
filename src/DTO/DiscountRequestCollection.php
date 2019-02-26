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
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = DiscountRequestDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'discounts';
}
