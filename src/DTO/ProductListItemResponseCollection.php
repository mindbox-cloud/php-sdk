<?php


namespace Mindbox\DTO;

/**
 * Class ProductListItemResponseCollection
 *
 * @package Mindbox\DTO
 */
class ProductListItemResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = ProductListItemResponseDTO::class;
}
