<?php


namespace Mindbox\DTO;

/**
 * @property array  ids
 * @property string pointOfContact
 * @property string area
 **/
abstract class OrderDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'order';

    /**
     * @return string
     */
    public function getPointOfContact()
    {
        return $this->getField('pointOfContact');
    }

    /**
     * @return string
     */
    public function getArea()
    {
        return $this->getField('area');
    }
}
