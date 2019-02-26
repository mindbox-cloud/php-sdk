<?php


namespace Mindbox\DTO;

/**
 * Class CustomerIdentityRequestCollection
 *
 * @package Mindbox\DTO
 */
class CustomerIdentityRequestCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = CustomerIdentityRequestDTO::class;
}
