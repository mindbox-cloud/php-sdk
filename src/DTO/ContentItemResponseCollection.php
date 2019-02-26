<?php


namespace Mindbox\DTO;

/**
 * Class ContentItemResponseCollection
 *
 * @package Mindbox\DTO
 */
class ContentItemResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = ContentItemResponseDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'content';
}
