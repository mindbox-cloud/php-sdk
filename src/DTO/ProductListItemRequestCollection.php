<?php


namespace Mindbox\DTO;

/**
 * Class ProductListRequestCollection
 *
 * @package Mindbox\DTO
 */
class ProductListItemRequestCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = ProductListItemRequestDTO::class;
}
