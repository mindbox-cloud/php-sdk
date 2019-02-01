<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\BalanceResponseDTO;

/**
 * Class BalanceResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class BalanceResponseDTOTest extends DTOTest
{
    /**
     * @var BalanceResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = BalanceResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'totalValue'     => 'some_totalValue',
            'availableValue' => 'some_availableValue',
            'blockedValue'   => 'some_blockedValue',
        ];
        $this->dto = new BalanceResponseDTO($data);
    }

    public function testGetTotalValue()
    {
        $field = $this->dto->getTotalValue();

        $this->assertSame('some_totalValue', $field);
    }

    public function testGetAvailableValue()
    {
        $field = $this->dto->getAvailableValue();

        $this->assertSame('some_availableValue', $field);
    }

    public function testGetBlockedValue()
    {
        $field = $this->dto->getBlockedValue();

        $this->assertSame('some_blockedValue', $field);
    }
}
