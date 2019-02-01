<?php


namespace Mindbox\DTO;

/**
 * @property array  ids
 * @property string $name
 * @property string description
 **/
class PromoCodeTypeResponseDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'type';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getField('name');
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->getField('description');
    }
}
