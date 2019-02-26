<?php


namespace Mindbox\DTO;

/**
 * Class CustomerIdentityResponseCollection
 *
 * @package Mindbox\DTO
 */
class CustomerIdentityResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = CustomerIdentityResponseDTO::class;
}
