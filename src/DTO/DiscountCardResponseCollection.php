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
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = DiscountCardResponseDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'discountCards';
}
