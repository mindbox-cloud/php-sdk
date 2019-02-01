<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\RemoveProductFromListRequestDTO;

/**
 * Class RemoveProductFromListRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class RemoveProductFromListRequestDTOTest extends DTOTest
{
    /**
     * @var RemoveProductFromListRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = RemoveProductFromListRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'product' => [
                'someField' => 'someValue',
            ],
        ];
        $this->dto = new RemoveProductFromListRequestDTO($data);
    }

    public function testGetProduct()
    {
        $field = $this->dto->getProduct();

        $this->assertInstanceOf(\Mindbox\DTO\ProductRequestDTO::class, $field);
    }

    public function testSetProduct()
    {
        $this->dto->setProduct(['price' => 'value']);
        $field = $this->dto->getProduct();

        $this->assertInstanceOf(\Mindbox\DTO\ProductRequestDTO::class, $field);
        $this->assertSame('value', $field->getPrice());
    }
}
