<?php


namespace Mindbox\DTO;

/**
 * Class DiscountInfoBalanceSpentResponseDTO
 *
 * @package Mindbox\DTO
 * @property string $spentAmountForCurrentOrder
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
