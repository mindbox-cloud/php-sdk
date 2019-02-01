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
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = CustomerSegmentationResponseDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'customerSegmentations';
}
