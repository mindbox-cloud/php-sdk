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
     * @param string $name
     *
     * @return string|null
     */
    public function getId($name)
    {
        $ids = $this->getIds();
        return !empty($ids[$name]) ? $ids[$name] : null;
    }

    /**
     * @return mixed
     */
    public function getIds()
    {
        return $this->getField('ids');
    }
}
