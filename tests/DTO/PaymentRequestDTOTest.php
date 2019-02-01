<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\PaymentRequestDTO;

/**
 * Class PaymentRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class PaymentRequestDTOTest extends DTOTest
{
    /**
     * @var PaymentRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = PaymentRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'type'   => 'some_type',
            'id'     => 'some_id',
            'amount' => 'some_amount',
        ];
        $this->dto = new PaymentRequestDTO($data);
    }

    public function testGetType()
    {
        $field = $this->dto->getType();

        $this->assertSame('some_type', $field);
    }

    public function testSetType()
    {
        $this->dto->setType('new_type');
        $field = $this->dto->getType();

        $this->assertSame('new_type', $field);
    }

    public function testGetId()
    {
        $field = $this->dto->getId();

        $this->assertSame('some_id', $field);
    }

    public function testSetId()
    {
        $this->dto->setId('new_id');
        $field = $this->dto->getId();

        $this->assertSame('new_id', $field);
    }

    public function testGetAmount()
    {
        $field = $this->dto->getAmount();

        $this->assertSame('some_amount', $field);
    }

    public function testSetAmount()
    {
        $this->dto->setAmount('new_amount');
        $field = $this->dto->getAmount();

        $this->assertSame('new_amount', $field);
    }
}
