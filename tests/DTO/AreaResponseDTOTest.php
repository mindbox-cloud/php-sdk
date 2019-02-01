<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\AreaResponseDTO;

/**
 * Class AreaResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class AreaResponseDTOTest extends DTOTest
{
    /**
     * @var \Mindbox\DTO\AreaResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = AreaResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'ids'  => ['someField' => 'someValue'],
            'name' => 'some_name',
        ];
        $this->dto = new AreaResponseDTO($data);
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
