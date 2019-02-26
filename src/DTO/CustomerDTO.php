<?php


namespace Mindbox\DTO;

/**
 * Trait CustomerDTO
 *
 * @package Mindbox\DTO
 * @property array  $ids
 * @property string $email
 * @property string $mobilePhone
 * @property string $lastName
 * @property string $firstName
 * @property string $middleName
 * @property string $birthDate
 * @property array  $customFields
 **/
trait CustomerDTO
{
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->getField('email');
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->getField('mobilePhone');
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getField('lastName');
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getField('firstName');
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->getField('middleName');
    }

    /**
     * @return string
     */
    public function getBirthDate()
    {
        return $this->getField('birthDate');
    }
}
