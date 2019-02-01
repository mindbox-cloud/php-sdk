<?php


namespace Mindbox\DTO;

/**
 * @property array  ids
 * @property string name
 */
abstract class AreaDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'area';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getField('name');
    }
}
