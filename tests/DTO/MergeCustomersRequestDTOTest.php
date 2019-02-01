<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\MergeCustomersRequestDTO;

/**
 * Class MergeCustomersRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class MergeCustomersRequestDTOTest extends DTOTest
{
    /**
     * @var MergeCustomersRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = MergeCustomersRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'customersToMerge'  => [['someField' => 'someValue']],
            'resultingCustomer' => ['someField' => 'someValue'],
        ];
        $this->dto = new MergeCustomersRequestDTO($data);
    }

    public function testGetCustomersToMerge()
    {
        $field = $this->dto->getCustomersToMerge();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerIdentityRequestCollection::class, $field);
    }

    public function testSetCustomersToMerge()
    {
        $this->dto->setCustomersToMerge([[['someId' => 'someIdValue']]]);
        $field = $this->dto->getCustomersToMerge();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerIdentityRequestCollection::class, $field);
    }

    public function testGetResultingCustomer()
    {
        $field = $this->dto->getResultingCustomer();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerIdentityRequestDTO::class, $field);
    }

    public function testSetResultingCustomer()
    {
        $this->dto->setResultingCustomer([['someId' => 'someIdValue']]);
        $field = $this->dto->getResultingCustomer();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerIdentityRequestDTO::class, $field);
    }
}
