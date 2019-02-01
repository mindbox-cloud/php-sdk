<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\SetProductCountInListRequestDTO;

/**
 * Class SetProductCountInListRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class SetProductCountInListRequestDTOTest extends DTOTest
{
    /**
     * @var SetProductCountInListRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = SetProductCountInListRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'product' => ['someField' => 'someValue'],
            'count'   => 'some_count',
        ];
        $this->dto = new SetProductCountInListRequestDTO($data);
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

    public function testGetCount()
    {
        $field = $this->dto->getCount();

        $this->assertSame('some_count', $field);
    }

    public function testSetCount()
    {
        $this->dto->setCount('new_count');
        $field = $this->dto->getCount();

        $this->assertSame('new_count', $field);
    }
}
