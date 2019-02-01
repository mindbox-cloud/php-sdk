<?php


namespace Mindbox\DTO;

/**
 * @property BalanceDiscountResponseDTO balance
 **/
class DiscountInfoBalanceResponseDTO extends DiscountInfoResponseDTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'balance' => BalanceDiscountResponseDTO::class,
    ];

    /**
     * @return BalanceDiscountResponseDTO
     */
    public function getBalance()
    {
        return $this->getField('balance');
    }
}
