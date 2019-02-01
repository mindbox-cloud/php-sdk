<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\PromoCodeTypeResponseDTO;

/**
 * Class PromoCodeTypeResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class PromoCodeTypeResponseDTOTest extends DTOTest
{
    /**
     * @var PromoCodeTypeResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = PromoCodeTypeResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'ids'         => ['someField' => 'someValue'],
            'name'        => 'some_name',
            'description' => 'some_description',
        ];
        $this->dto = new PromoCodeTypeResponseDTO($data);
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

    public function testGetDescription()
    {
        $field = $this->dto->getDescription();

        $this->assertSame('some_description', $field);
    }
}
