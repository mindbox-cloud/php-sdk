<?php


namespace Mindbox\DTO;

/**
 * @property BalanceTypeRequestDTO balanceType
 **/
class DiscountBalanceRequestDTO extends DiscountRequestDTO
{
    /**
     * @var array Map of object`s fields.
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
