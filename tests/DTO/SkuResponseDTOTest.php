<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\SkuResponseDTO;

/**
 * Class SkuResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class SkuResponseDTOTest extends SkuIdentityResponseDTOTest
{
    /**
     * @var SkuResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = SkuResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'ids'              => ['someField' => 'someValue'],
            'productId'        => 'some_productId',
            'basePricePerItem' => 'some_basePricePerItem',
            'skuId'            => 'some_skuId',
        ];
        $this->dto = new SkuResponseDTO($data);
    }

    public function testGetProductId()
    {
        $field = $this->dto->getProductId();

        $this->assertSame('some_productId', $field);
    }

    public function testGetBasePricePerItem()
    {
        $field = $this->dto->getBasePricePerItem();

        $this->assertSame('some_basePricePerItem', $field);
    }

    public function testGetSkuId()
    {
        $field = $this->dto->getSkuId();

        $this->assertSame('some_skuId', $field);
    }
}
