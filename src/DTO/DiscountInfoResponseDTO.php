<?php


namespace Mindbox\DTO;

/**
 * Class DiscountInfoResponseDTO
 *
 * @package Mindbox\DTO
 * @property string $type
 * @property string $availableAmountForCurrentOrder
 **/
class DiscountInfoResponseDTO extends DTO
{
    /**
     * @var string Название элемента для корректной генерации xml.
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
