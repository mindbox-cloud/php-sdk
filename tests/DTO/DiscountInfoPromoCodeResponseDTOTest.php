<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\DiscountInfoPromoCodeResponseDTO;

/**
 * Class DiscountInfoPromoCodeResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class DiscountInfoPromoCodeResponseDTOTest extends DTOTest
{
    /**
     * @var DiscountInfoPromoCodeResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = DiscountInfoPromoCodeResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'type'                           => 'some_type',
            'availableAmountForCurrentOrder' => 'some_availableAmountForCurrentOrder',
            'promoCode'                      => ['status' => 'some_status'],
        ];
        $this->dto = new DiscountInfoPromoCodeResponseDTO($data);
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

    public function testGetPromoCode()
    {
        $field = $this->dto->getPromoCode();

        $this->assertInstanceOf(\Mindbox\DTO\PromoCodeResponseDTO::class, $field);
        $this->assertSame('some_status', $field->getStatus());
    }
}
