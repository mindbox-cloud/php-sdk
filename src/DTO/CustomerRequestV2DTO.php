<?php


namespace Mindbox\DTO;

/**
 * Class CustomerRequestV2DTO
 *
 * @package Mindbox\DTO
 * @property string $isAuthorized
 */
class CustomerRequestV2DTO extends CustomerRequestDTO
{
    /**
     * @return string
     */
    public function getIsAuthorized()
    {
        return $this->getField('isAuthorized');
    }

    /**
     * @param mixed $isAuthorized
     */
    public function setIsAuthorized($isAuthorized)
    {
        $this->setField('isAuthorized', $isAuthorized);
    }
}
