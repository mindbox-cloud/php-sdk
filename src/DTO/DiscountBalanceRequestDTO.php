<?php


namespace Mindbox\DTO;

/**
 * Class DiscountBalanceRequestDTO
 *
 * @package Mindbox\DTO
 * @property BalanceTypeRequestDTO $balanceType
 **/
class DiscountBalanceRequestDTO extends DiscountRequestDTO
{
    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
     */
    protected static $DTOMap = [
        'balanceType' => BalanceTypeRequestDTO::class,
    ];

    /**
     * @return BalanceTypeRequestDTO
     */
    public function getBalanceType()
    {
        return $this->getField('balanceType');
    }

    /**
     * @param array|BalanceTypeRequestDTO $balanceType
     */
    public function setBalanceType($balanceType)
    {
        $this->setField('balanceType', $balanceType);
    }
}
