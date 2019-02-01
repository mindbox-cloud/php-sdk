<?php


namespace Mindbox\DTO;

/**
 * @property string spentAmountForCurrentOrder
 **/
class DiscountInfoBalanceSpentResponseDTO extends DiscountInfoBalanceResponseDTO
{
    /**
     * @return string
     */
    public function getSpentAmountForCurrentOrder()
    {
        return $this->getField('spentAmountForCurrentOrder');
    }
}
