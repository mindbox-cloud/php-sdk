<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\SetProductListRequestDTO;

/**
 * Class SetProductListRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class SetProductListRequestDTOTest extends DTOTest
{
    /**
     * @var SetProductListRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = SetProductListRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'products' => [['someField' => 'someValue'], ['someField' => 'someValue']],
        ];
        $this->dto = new SetProductListRequestDTO($data);
    }

    public function testGetProduct()
    {
        $field = $this->dto->getProducts();

        $this->assertInstanceOf(\Mindbox\DTO\ProductListItemRequestCollection::class, $field);
    }

    public function testSetProduct()
    {
        $this->dto->setProducts([['someField' => 'someValue'], ['someField' => 'someValue']]);
        $field = $this->dto->getProducts();

        $this->assertInstanceOf(\Mindbox\DTO\ProductListItemRequestCollection::class, $field);
    }
}
