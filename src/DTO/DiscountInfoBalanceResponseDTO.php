<?php


namespace Mindbox\DTO;

/**
 * Class DiscountInfoBalanceResponseDTO
 *
 * @package Mindbox\DTO
 * @property BalanceDiscountResponseDTO $balance
 **/
class DiscountInfoBalanceResponseDTO extends DiscountInfoResponseDTO
{
    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
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
