<?php


namespace Mindbox\DTO;

/**
 * @property array ids
 */
abstract class BalanceTypeDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'balanceType';
}
