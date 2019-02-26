<?php


namespace Mindbox\DTO;

/**
 * Class LineResponseCollection
 *
 * @package Mindbox\DTO
 */
class LineResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = LineResponseDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'lines';
}
