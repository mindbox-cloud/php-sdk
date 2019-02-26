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
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = DiscountInfoResponseDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'discountsInfo';
}
