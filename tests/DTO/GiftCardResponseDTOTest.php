<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\GiftCardResponseDTO;

/**
 * Class GiftCardResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class GiftCardResponseDTOTest extends DTOTest
{
    /**
     * @var GiftCardResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = GiftCardResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'id'          => 'some_id',
            'getFromPool' => 'some_getFromPool',
            'status'      => 'some_status',
            'balance'     => ['available' => 'some_available'],
        ];
        $this->dto = new GiftCardResponseDTO($data);
    }

    public function testGetId()
    {
        $field = $this->dto->getId();

        $this->assertSame('some_id', $field);
    }

    public function testGetGetFromPool()
    {
        $field = $this->dto->getGetFromPool();

        $this->assertSame('some_getFromPool', $field);
    }

    public function testGetStatus()
    {
        $field = $this->dto->getStatus();

        $this->assertSame('some_status', $field);
    }

    public function testGetBalance()
    {
        $field = $this->dto->getBalance();

        $this->assertInstanceOf(\Mindbox\DTO\BalanceGiftCardResponseDTO::class, $field);
        $this->assertSame('some_available', $field->getAvailable());
    }
}
