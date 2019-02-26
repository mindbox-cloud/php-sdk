<?php


namespace Mindbox\DTO;

/**
 * Class PromoActionResponseDTO
 *
 * @package Mindbox\DTO
 * @property array  $ids
 * @property string $name
 */
class PromoActionResponseDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'promoAction';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getField('name');
    }
}
