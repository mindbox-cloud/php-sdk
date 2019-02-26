<?php


namespace Mindbox\DTO;

/**
 * Class CustomerSegmentationResponseCollection
 *
 * @package Mindbox\DTO
 */
class CustomerSegmentationResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = CustomerSegmentationResponseDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'customerSegmentations';
}
