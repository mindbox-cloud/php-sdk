<?php


namespace Mindbox\DTO;

/**
 * @property string                     status
 * @property BalanceGiftCardResponseDTO balance
 **/
class GiftCardResponseDTO extends GiftCardDTO
{
    /**
     * @var array Map of object`s fields.
     */
    protected static $DTOMap = [
        'balance' => BalanceGiftCardResponseDTO::class,
    ];

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getField('status');
    }

    /**
     * @return BalanceGiftCardResponseDTO
     */
    public function getBalance()
    {
        return $this->getField('balance');
    }
}
