<?php


namespace Mindbox\DTO;

/**
 * Class AreaRequestDTO
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
