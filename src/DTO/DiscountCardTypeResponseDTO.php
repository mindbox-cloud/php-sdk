<?php


namespace Mindbox\DTO;

/**
 * Class DiscountCardTypeResponseDTO
 *
 * @package Mindbox\DTO
 * @property string $id
 **/
class DiscountCardTypeResponseDTO extends DTO
{
    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'type';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getField('id');
    }
}
