<?php


namespace Mindbox\DTO;

/**
 * Class SubscriptionResponseCollection
 *
 * @package Mindbox\DTO
 */
class SubscriptionResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = SubscriptionResponseDTO::class;
}
