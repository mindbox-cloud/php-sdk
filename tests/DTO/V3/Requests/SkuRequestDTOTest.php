<?php

namespace Mindbox\Tests\DTO\V3\Requests;

use Mindbox\DTO\V3\Requests\SkuRequestDTO;

/**
 * Class SkuRequestDTOTest
 *
 * @package Mindbox\Tests\DTO\V3\Requests
 */
class SkuRequestDTOTest extends SkuIdentityRequestDTOTest
{
    /**
     * @var SkuRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = SkuRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'ids'              => ['someField' => 'someValue'],
            'productId'        => 'some_productId',
            'basePricePerItem' => 'some_basePricePerItem',
            'skuId'            => 'some_skuId',
        ];
        $this->dto = new SkuRequestDTO($data);
    }

    public function testGetProductId()
    {
        $field = $this->dto->getProductId();

        $this->assertSame('some_productId', $field);
    }

    public function testSetProductId()
    {
        $this->dto->setProductId('new_productId');
        $field = $this->dto->getProductId();

        $this->assertSame('new_productId', $field);
    }

    public function testGetBasePricePerItem()
    {
        $field = $this->dto->getBasePricePerItem();

        $this->assertSame('some_basePricePerItem', $field);
    }

    public function testSetBasePricePerItem()
    {
        $this->dto->setBasePricePerItem('new_basePricePerItem');
        $field = $this->dto->getBasePricePerItem();

        $this->assertSame('new_basePricePerItem', $field);
    }

    public function testGetSkuId()
    {
        $field = $this->dto->getSkuId();

        $this->assertSame('some_skuId', $field);
    }

    public function testSetSkuId()
    {
        $this->dto->setSkuId('new_skuId');
        $field = $this->dto->getSkuId();

        $this->assertSame('new_skuId', $field);
    }
}
