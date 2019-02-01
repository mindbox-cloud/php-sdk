<?php


namespace Mindbox\DTO;

/**
 * Trait IdentityDTO
 *
 * @package Mindbox\DTO
 */
trait IdentityDTO
{
    /**
     * @param $name
     *
     * @return string|null
     */
    public function getId($name)
    {
        $ids = $this->getIds();
        return !empty($ids[$name]) ? $ids[$name] : null;
    }

    /**
     * @return array
     */
    public function getIds()
    {
        return $this->getField('ids');
    }
}
