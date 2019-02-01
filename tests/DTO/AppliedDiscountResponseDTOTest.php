<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\AppliedDiscountResponseDTO;

/**
 * Class AppliedDiscountResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class AppliedDiscountResponseDTOTest extends DTOTest
{
    /**
     * @var AppliedDiscountResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = AppliedDiscountResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'type'        => 'some_type',
            'id'          => 'some_id',
            'amount'      => 'some_amount',
            'promoAction' => ['name' => 'some_name'],
            'balanceType' => ['name' => 'some_balanceTypeName'],
        ];
        $this->dto = new AppliedDiscountResponseDTO($data);
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

    public function testGetPromoAction()
    {
        $field = $this->dto->getPromoAction();

        $this->assertInstanceOf(\Mindbox\DTO\PromoActionResponseDTO::class, $field);
        $this->assertSame('some_name', $field->getName());
    }

    public function testGetBalanceType()
    {
        $field = $this->dto->getBalanceType();

        $this->assertInstanceOf(\Mindbox\DTO\BalanceTypeResponseDTO::class, $field);
        $this->assertSame('some_balanceTypeName', $field->getName());
    }
}
