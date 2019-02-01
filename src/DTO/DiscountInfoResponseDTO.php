<?php


namespace Mindbox\DTO;

/**
 * @property string type
 * @property string availableAmountForCurrentOrder
 **/
class DiscountInfoResponseDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'discountInfo';

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getField('type');
    }

    /**
     * @return string
     */
    public function getAvailableAmountForCurrentOrder()
    {
        return $this->getField('availableAmountForCurrentOrder');
    }
}
