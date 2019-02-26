<?php


namespace Mindbox\DTO;

/**
 * Class PaymentDTO
 *
 * @package Mindbox\DTO
 * @property string $type
 * @property string $id
 * @property string $amount
 **/
abstract class PaymentDTO extends DTO
{
    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'payment';

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
    public function getId()
    {
        return $this->getField('id');
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->getField('amount');
    }
}
