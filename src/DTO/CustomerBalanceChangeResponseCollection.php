<?php


namespace Mindbox\DTO;

/**
 * Class CustomerBalanceChangeResponseCollection
 *
 * @package Mindbox\DTO
 */
class CustomerBalanceChangeResponseCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = CustomerBalanceChangeResponseDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'customerBalances';
}
