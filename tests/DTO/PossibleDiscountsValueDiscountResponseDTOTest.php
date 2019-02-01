<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\PossibleDiscountsValueDiscountResponseDTO;

/**
 * Class PossibleDiscountsValueDiscountResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class PossibleDiscountsValueDiscountResponseDTOTest extends DTOTest
{
    /**
     * @var PossibleDiscountsValueDiscountResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = PossibleDiscountsValueDiscountResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'amount'     => 'some_amount',
            'amountType' => 'some_amountType',
        ];
        $this->dto = new PossibleDiscountsValueDiscountResponseDTO($data);
    }

    public function testGetAmount()
    {
        $field = $this->dto->getAmount();

        $this->assertSame('some_amount', $field);
    }

    public function testGetAmountType()
    {
        $field = $this->dto->getAmountType();

        $this->assertSame('some_amountType', $field);
    }
}
