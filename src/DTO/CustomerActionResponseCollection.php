<?php


namespace Mindbox\DTO;

/**
 * Class CustomerActionResponseCollection
 *
 * @package Mindbox\DTO
 */
class CustomerActionResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = CustomerActionResponseDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'customerActions';
}
