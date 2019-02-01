<?php


namespace Mindbox\DTO;

/**
 * @property string                       changeAmount
 * @property string                       expirationDateTimeUtc
 * @property string                       isAvailable
 * @property BalanceChangeKindResponseDTO balanceChangeKind
 **/
class CustomerBalanceChangeResponseDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'balanceChangeKind' => BalanceChangeKindResponseDTO::class,
    ];

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'customerBalanceChange';

    /**
     * @return string
     */
    public function getChangeAmount()
    {
        return $this->getField('changeAmount');
    }

    /**
     * @return string
     */
    public function getExpirationDateTimeUtc()
    {
        return $this->getField('expirationDateTimeUtc');
    }

    /**
     * @return string
     */
    public function getIsAvailable()
    {
        return $this->getField('isAvailable');
    }

    /**
     * @return BalanceChangeKindResponseDTO
     */
    public function getBalanceChangeKind()
    {
        return $this->getField('balanceChangeKind');
    }
}
