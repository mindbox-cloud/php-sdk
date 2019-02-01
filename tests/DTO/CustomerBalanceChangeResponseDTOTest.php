<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\CustomerBalanceChangeResponseDTO;

/**
 * Class CustomerBalanceChangeResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class CustomerBalanceChangeResponseDTOTest extends DTOTest
{
    /**
     * @var CustomerBalanceChangeResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = CustomerBalanceChangeResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'changeAmount'          => 'some_changeAmount',
            'expirationDateTimeUtc' => 'some_expirationDateTimeUtc',
            'isAvailable'           => 'some_isAvailable',
            'balanceChangeKind'     => ['someField' => 'someValue'],
        ];
        $this->dto = new CustomerBalanceChangeResponseDTO($data);
    }

    public function testGetChangeAmount()
    {
        $field = $this->dto->getChangeAmount();

        $this->assertSame('some_changeAmount', $field);
    }

    public function testGetExpirationDateTimeUtc()
    {
        $field = $this->dto->getExpirationDateTimeUtc();

        $this->assertSame('some_expirationDateTimeUtc', $field);
    }

    public function testGetIsAvailable()
    {
        $field = $this->dto->getIsAvailable();

        $this->assertSame('some_isAvailable', $field);
    }

    public function testBalanceChangeKind()
    {
        $field = $this->dto->getBalanceChangeKind();

        $this->assertInstanceOf(\Mindbox\DTO\BalanceChangeKindResponseDTO::class, $field);
    }
}
