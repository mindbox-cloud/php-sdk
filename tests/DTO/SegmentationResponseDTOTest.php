<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\SegmentationResponseDTO;

/**
 * Class SegmentationResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class SegmentationResponseDTOTest extends DTOTest
{
    /**
     * @var SegmentationResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = SegmentationResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'ids'  => ['someField' => 'someValue'],
            'name' => 'some_name',
        ];
        $this->dto = new SegmentationResponseDTO($data);
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

    public function testGetName()
    {
        $field = $this->dto->getName();

        $this->assertSame('some_name', $field);
    }
}
