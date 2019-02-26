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
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = CategoryResponseDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'categories';
}
