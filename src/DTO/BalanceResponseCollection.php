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
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = BalanceResponseDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'balances';
}
