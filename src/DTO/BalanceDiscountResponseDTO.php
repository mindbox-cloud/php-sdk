<?php


namespace Mindbox\DTO;

/**
 * @property BalanceTypeResponseDTO balanceType
 * @property string                 total
 * @property string                 available
 * @property string                 blocked
 **/
class BalanceDiscountResponseDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'balanceType' => BalanceTypeResponseDTO::class,
    ];

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'balance';

    /**
     * @return BalanceTypeResponseDTO
     */
    public function getBalanceType()
    {
        return $this->getField('balanceType');
    }

    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->getField('total');
    }

    /**
     * @return string
     */
    public function getAvailable()
    {
        return $this->getField('available');
    }

    /**
     * @return string
     */
    public function getBlocked()
    {
        return $this->getField('blocked');
    }
}
