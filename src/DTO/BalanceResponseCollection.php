<?php


namespace Mindbox\DTO;

/**
 * Class BalanceResponseCollection
 *
 * @package Mindbox\DTO
 */
class BalanceResponseCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = BalanceResponseDTO::class;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'balances';
}
