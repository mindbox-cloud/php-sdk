<?php


namespace Mindbox\DTO;

/**
 * Class PossibleDiscountsValueItemResponseCollection
 *
 * @package Mindbox\DTO
 */
class PossibleDiscountsValueItemResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = PossibleDiscountsValueItemResponseDTO::class;
}
