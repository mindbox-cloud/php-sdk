<?php


namespace Mindbox\DTO;

/**
 * Class OrderResponseCollection
 *
 * @package Mindbox\DTO
 */
class OrderResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = OrderResponseDTO::class;
}
