<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\CategoryRequestDTO;

/**
 * Class CategoryRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class CategoryRequestDTOTest extends DTOTest
{
    /**
     * @var CategoryRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = CategoryRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'ids' => ['someField' => 'someValue'],
        ];
        $this->dto = new CategoryRequestDTO($data);
    }

    public function testGetIds()
    {
        $field = $this->dto->getIds();

        $this->assertSame(['someField' => 'someValue'], $field);
    }

    public function testSetIds()
    {
        $this->dto->setIds(['bitrixId' => 'some_bitrixId']);
        $field = $this->dto->getIds();

        $this->assertSame('some_bitrixId', $field['bitrixId']);
    }
}
