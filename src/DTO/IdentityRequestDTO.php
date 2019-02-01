<?php


namespace Mindbox\DTO;

/**
 * Trait IdentityRequestDTO
 *
 * @package Mindbox\DTO
 */
trait IdentityRequestDTO
{
    use IdentityDTO;

    /**
     * @param $name
     * @param $value
     */
    public function setId($name, $value)
    {
        $ids        = is_array($this->getIds()) ? $this->getIds() : [];
        $ids[$name] = $value;
        $this->setIds($ids);
    }

    /**
     * @param array
     */
    public function setIds($ids)
    {
        $this->setField('ids', $ids);
    }
}
