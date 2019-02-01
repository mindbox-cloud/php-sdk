<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\DiscountInfoBalanceResponseDTO;

/**
 * Class DiscountInfoBalanceResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class DiscountInfoBalanceResponseDTOTest extends DTOTest
{
    /**
     * @var DiscountInfoBalanceResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = DiscountInfoBalanceResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'type'                           => 'some_type',
            'availableAmountForCurrentOrder' => 'some_availableAmountForCurrentOrder',
            'balance'                        => ['blocked' => 'some_blocked'],
        ];
        $this->dto = new DiscountInfoBalanceResponseDTO($data);
    }

    public function testGetType()
    {
        $field = $this->dto->getType();

        $this->assertSame('some_type', $field);
    }

    public function testGetAvailableAmountForCurrentOrder()
    {
        $field = $this->dto->getAvailableAmountForCurrentOrder();

        $this->assertSame('some_availableAmountForCurrentOrder', $field);
    }

    public function testGetBalance()
    {
        $field = $this->dto->getBalance();

        $this->assertInstanceOf(\Mindbox\DTO\BalanceDiscountResponseDTO::class, $field);
        $this->assertSame('some_blocked', $field->getBlocked());
    }
}
