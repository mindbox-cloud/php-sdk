<?php


namespace Mindbox\DTO;

/**
 * Class AreaRequestDTO
 *
 * @package Mindbox\DTO
 */
class AreaRequestDTO extends AreaDTO
{
    use IdentityRequestDTO;

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->setField('name', $name);
    }
}
