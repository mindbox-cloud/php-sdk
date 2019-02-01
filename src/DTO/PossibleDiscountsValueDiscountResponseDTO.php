<?php


namespace Mindbox\DTO;

/**
 * Class PossibleDiscountsValueDiscountResponseDTO
 *
 * @package Mindbox\DTO
 * @property string amount
 * @property string amountType
 */
class PossibleDiscountsValueDiscountResponseDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'discount';

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->getField('amount');
    }

    /**
     * @return string
     */
    public function getAmountType()
    {
        return $this->getField('amountType');
    }
}
