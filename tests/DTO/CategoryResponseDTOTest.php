<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\CategoryResponseDTO;

/**
 * Class CategoryResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class CategoryResponseDTOTest extends DTOTest
{
    /**
     * @var CategoryResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = CategoryResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'ids' => ['someField' => 'someValue'],
        ];
        $this->dto = new CategoryResponseDTO($data);
    }

    public function testGetIds()
    {
        $field = $this->dto->getIds();

        $this->assertSame(['someField' => 'someValue'], $field);
    }
}
