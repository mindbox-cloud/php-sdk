<?php


namespace Mindbox\DTO;

/**
 * Class OrderUpdateRequestDTO
 *
 * @package Mindbox\DTO
 * @property string $updatedDateTimeUtc
 * @property string $totalPrice
 **/
class OrderUpdateRequestDTO extends OrderRequestDTO
{
    /**
     * @return string
     */
    public function getUpdatedDateTimeUtc()
    {
        return $this->getField('updatedDateTimeUtc');
    }

    /**
     * @param mixed $updatedDateTimeUtc
     */
    public function setUpdatedDateTimeUtc($updatedDateTimeUtc)
    {
        $this->setField('updatedDateTimeUtc', $updatedDateTimeUtc);
    }

    /**
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->getField('totalPrice');
    }

    /**
     * @param mixed $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->setField('totalPrice', $totalPrice);
    }
}
