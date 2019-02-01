<?php


namespace Mindbox\DTO;

/**
 * Class SubscriptionRequestCollection
 *
 * @package Mindbox\DTO
 */
class SubscriptionRequestCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = SubscriptionRequestDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'subscriptions';
}
