<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\PaymentInfoResponseDTO;

/**
 * Class PaymentInfoResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class PaymentInfoResponseDTOTest extends DTOTest
{
    /**
     * @var PaymentInfoResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = PaymentInfoResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'type'                           => 'some_type',
            'availableAmountForCurrentOrder' => 'some_availableAmountForCurrentOrder',
            'giftCard'                       => ['status' => 'some_status'],
        ];
        $this->dto = new PaymentInfoResponseDTO($data);
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

    public function testGetGiftCard()
    {
        $field = $this->dto->getGiftCard();

        $this->assertInstanceOf(\Mindbox\DTO\GiftCardResponseDTO::class, $field);
        $this->assertSame('some_status', $field->getStatus());
    }
}
