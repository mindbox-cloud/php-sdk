<?php


namespace Mindbox\DTO;

/**
 * @property string total
 * @property string available
 * @property string used
 **/
class BalanceGiftCardResponseDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'balance';

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
    public function getUsed()
    {
        return $this->getField('used');
    }
}
