<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\PaymentResponseDTO;

/**
 * Class PaymentResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class PaymentResponseDTOTest extends DTOTest
{
    /**
     * @var PaymentResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = PaymentResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'type'   => 'some_type',
            'id'     => 'some_id',
            'amount' => 'some_amount',
        ];
        $this->dto = new PaymentResponseDTO($data);
    }

    public function testGetType()
    {
        $field = $this->dto->getType();

        $this->assertSame('some_type', $field);
    }

    public function testGetId()
    {
        $field = $this->dto->getId();

        $this->assertSame('some_id', $field);
    }

    public function testGetAmount()
    {
        $field = $this->dto->getAmount();

        $this->assertSame('some_amount', $field);
    }
}
