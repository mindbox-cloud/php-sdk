<?php


namespace Mindbox\DTO;

/**
 * Class DiscountRequestDTO
 *
 * @package Mindbox\DTO
 **/
class DiscountRequestDTO extends DiscountDTO
{
    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->setField('type', $type);
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->setField('amount', $amount);
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->setField('id', $id);
    }
}
