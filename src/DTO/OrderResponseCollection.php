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
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = OrderResponseDTO::class;
}
