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
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = CategoryRequestDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'categories';
}
