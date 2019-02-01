<?php


namespace Mindbox\DTO;

/**
 **/
class PaymentRequestDTO extends PaymentDTO
{
    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->setField('type', $type);
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->setField('id', $id);
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->setField('amount', $amount);
    }
}
