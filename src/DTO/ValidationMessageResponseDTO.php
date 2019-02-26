<?php


namespace Mindbox\DTO;

/**
 * Class ValidationMessageResponseDTO
 *
 * @package Mindbox\DTO
 * @property string $message
 * @property string $location
 **/
class ValidationMessageResponseDTO extends DTO
{
    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'validationMessage';

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->getField('message');
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->getField('location');
    }
}
