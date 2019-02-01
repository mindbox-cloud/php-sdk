<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\PointOfContactResponseDTO;

/**
 * Class PointOfContactResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class PointOfContactResponseDTOTest extends DTOTest
{
    /**
     * @var PointOfContactResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = PointOfContactResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'ids' => ['someField' => 'someValue'],
        ];
        $this->dto = new PointOfContactResponseDTO($data);
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
