<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\CustomerRequestV2DTO;

/**
 * Class CustomerRequestV2DTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class CustomerRequestV2DTOTest extends CustomerRequestDTOTest
{
    /**
     * @var CustomerRequestV2DTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = CustomerRequestV2DTO::class;

    public function setUp()
    {
        $data      = [
            'ids'                  => ['someField' => 'someValue'],
            'email'                => 'some_email',
            'mobilePhone'          => 'some_mobilePhone',
            'lastName'             => 'some_lastName',
            'firstName'            => 'some_firstName',
            'middleName'           => 'some_middleName',
            'fullName'             => 'some_fullName',
            'birthDate'            => 'some_birthDate',
            'password'             => 'some_password',
            'area'                 => ['someField' => 'someValue'],
            'subscriptions'        => [['someField' => 'someValue'], ['someField2' => 'someValue2']],
            'customFields'         => ['someField' => 'someValue'],
            'authenticationTicket' => 'some_authenticationTicket',
            'isAuthorized'         => 'some_isAuthorized',
        ];
        $this->dto = new CustomerRequestV2DTO($data);
    }

    public function testGetIsAuthorized()
    {
        $field = $this->dto->getIsAuthorized();

        $this->assertSame('some_isAuthorized', $field);
    }

    public function testSetIsAuthorized()
    {
        $this->dto->setIsAuthorized('new_isAuthorized');
        $field = $this->dto->getIsAuthorized();

        $this->assertSame('new_isAuthorized', $field);
    }
}
