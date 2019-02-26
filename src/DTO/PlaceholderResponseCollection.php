<?php


namespace Mindbox\DTO;

/**
 * Class PlaceholderResponseCollection
 *
 * @package Mindbox\DTO
 */
class PlaceholderResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = PlaceholderResponseDTO::class;
}
