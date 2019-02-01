<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\MergeCustomersResponseDTO;

/**
 * Class MergeCustomersResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class MergeCustomersResponseDTOTest extends DTOTest
{
    /**
     * @var MergeCustomersResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = MergeCustomersResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'customersToMerge'  => [['someField' => 'someValue']],
            'resultingCustomer' => ['someField' => 'someValue'],
        ];
        $this->dto = new MergeCustomersResponseDTO($data);
    }

    public function testGetCustomersToMerge()
    {
        $field = $this->dto->getCustomersToMerge();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerIdentityResponseCollection::class, $field);
    }

    public function testGetResultingCustomer()
    {
        $field = $this->dto->getResultingCustomer();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerIdentityResponseDTO::class, $field);
    }
}
