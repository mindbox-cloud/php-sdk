<?php


namespace Mindbox\DTO;

/**
 * @property string totalValue
 * @property string availableValue
 * @property string blockedValue
 **/
class BalanceResponseDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'balance';

    /**
     * @return string
     */
    public function getTotalValue()
    {
        return $this->getField('totalValue');
    }

    /**
     * @return string
     */
    public function getAvailableValue()
    {
        return $this->getField('availableValue');
    }

    /**
     * @return string
     */
    public function getBlockedValue()
    {
        return $this->getField('blockedValue');
    }
}
