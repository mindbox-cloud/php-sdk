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
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = CustomerActionResponseDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'customerActions';
}
