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
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = CustomerBalanceChangeResponseDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'customerBalances';
}
