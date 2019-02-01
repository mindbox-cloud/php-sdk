<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\ProductIdentityResponseDTO;

/**
 * Class ProductIdentityResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class ProductIdentityResponseDTOTest extends DTOTest
{
    /**
     * @var ProductIdentityResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = ProductIdentityResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'ids' => ['someField' => 'someValue'],
        ];
        $this->dto = new ProductIdentityResponseDTO($data);
    }

    public function testGetIds()
    {
        $field = $this->dto->getIds();

        $this->assertSame(['someField' => 'someValue'], $field);
    }

    public function testGetId()
    {
        $field = $this->dto->getId('someField');

        $this->assertSame('someValue', $field);
    }
}
