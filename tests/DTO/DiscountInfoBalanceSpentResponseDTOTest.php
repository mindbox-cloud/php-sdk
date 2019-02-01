<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\DiscountInfoBalanceSpentResponseDTO;

/**
 * Class DiscountInfoBalanceSpentResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class DiscountInfoBalanceSpentResponseDTOTest extends DiscountInfoBalanceResponseDTOTest
{
    /**
     * @var DiscountInfoBalanceSpentResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = DiscountInfoBalanceSpentResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'type'                           => 'some_type',
            'availableAmountForCurrentOrder' => 'some_availableAmountForCurrentOrder',
            'balance'                        => ['blocked' => 'some_blocked'],
            'spentAmountForCurrentOrder'     => 'some_spentAmountForCurrentOrder',
        ];
        $this->dto = new DiscountInfoBalanceSpentResponseDTO($data);
    }

    public function testGetSpentAmountForCurrentOrder()
    {
        $field = $this->dto->getSpentAmountForCurrentOrder();

        $this->assertSame('some_spentAmountForCurrentOrder', $field);
    }
}
