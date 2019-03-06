<?php

namespace Mindbox\Tests\DTO\V2\Responses;

use Mindbox\DTO\V2\Responses\PossibleDiscountsValueItemResponseDTO;
use Mindbox\Tests\DTO\DTOTest;

/**
 * Class PossibleDiscountsValueItemResponseDTOTest
 *
 * @package Mindbox\Tests\DTO\V2\Responses
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

        $this->assertInstanceOf(\Mindbox\DTO\V2\Responses\SkuResponseDTO::class, $field);
        $this->assertSame('some_skuId', $field->getSkuId());
    }
}
