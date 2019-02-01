<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\PossibleDiscountsValueItemResponseDTO;

/**
 * Class PossibleDiscountsValueItemResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class PossibleDiscountsValueItemResponseDTOTest extends DTOTest
{
    /**
     * @var PossibleDiscountsValueItemResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = PossibleDiscountsValueItemResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'sku' => ['skuId' => 'some_skuId'],
        ];
        $this->dto = new PossibleDiscountsValueItemResponseDTO($data);
    }

    public function testGetSku()
    {
        $field = $this->dto->getSku();

        $this->assertInstanceOf(\Mindbox\DTO\SkuResponseDTO::class, $field);
        $this->assertSame('some_skuId', $field->getSkuId());
    }
}
