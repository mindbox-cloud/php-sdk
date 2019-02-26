<?php


namespace Mindbox\DTO;

/**
 * Class BalanceTypeDTO
 *
 * @package Mindbox\DTO
 * @property array $ids
 */
abstract class BalanceTypeDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'balanceType';
}
