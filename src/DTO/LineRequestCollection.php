<?php


namespace Mindbox\DTO;

/**
 * Class LineRequestCollection
 *
 * @package Mindbox\DTO
 */
class LineRequestCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = LineRequestDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'lines';
}
