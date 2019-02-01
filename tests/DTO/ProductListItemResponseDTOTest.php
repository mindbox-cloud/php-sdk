<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\ProductListItemResponseDTO;

/**
 * Class ProductListItemResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class ProductListItemResponseDTOTest extends DTOTest
{
    /**
     * @var ProductListItemResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = ProductListItemResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'product' => ['someField' => 'someValue'],
            'count'   => 'some_count',
            'price'   => 'some_price',
        ];
        $this->dto = new ProductListItemResponseDTO($data);
    }

    public function testGetProduct()
    {
        $field = $this->dto->getProduct();

        $this->assertInstanceOf(\Mindbox\DTO\ProductResponseDTO::class, $field);
    }

    public function testGetCount()
    {
        $field = $this->dto->getCount();

        $this->assertSame('some_count', $field);
    }

    public function testGetPrice()
    {
        $field = $this->dto->getPrice();

        $this->assertSame('some_price', $field);
    }
}
