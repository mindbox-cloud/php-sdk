<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\OrderResponseDTO;

/**
 * Class OrderResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class OrderResponseDTOTest extends DTOTest
{
    /**
     * @var OrderResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = OrderResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'ids'                        => ['someField' => 'someValue'],
            'pointOfContact'             => 'some_pointOfContact',
            'area'                       => 'some_area',
            'discountedTotalPrice'       => 'some_discountedTotalPrice',
            'appliedDiscounts'           => [['someField' => 'someValue']],
            'totalAcquiredBalanceChange' => 'some_totalAcquiredBalanceChange',
            'createdPointOfContact'      => 'some_createdPointOfContact',
            'placeHolders'               => [['someField' => 'someValue']],
            'discountsInfo'              => [['someField' => 'someValue']],
            'paymentsInfo'               => [['someField' => 'someValue']],
            'createdDateTimeUtc'         => 'some_createdDateTimeUtc',
            'customer'                   => ['someField' => 'someValue'],
            'lines'                      => [['someField' => 'someValue']],
            'payments'                   => [['someField' => 'someValue']],
        ];
        $this->dto = new OrderResponseDTO($data);
    }

    public function testGetIds()
    {
        $field = $this->dto->getIds();

        $this->assertSame(['someField' => 'someValue'], $field);
    }

    public function testGetId()
    {
        $field = $this->dto->getId('someField');

        $this->assertSame('someValue', $field);
    }

    public function testGetPointOfContact()
    {
        $field = $this->dto->getPointOfContact();

        $this->assertSame('some_pointOfContact', $field);
    }

    public function testGetArea()
    {
        $field = $this->dto->getArea();

        $this->assertSame('some_area', $field);
    }

    public function testGetDiscountedTotalPrice()
    {
        $field = $this->dto->getDiscountedTotalPrice();

        $this->assertSame('some_discountedTotalPrice', $field);
    }

    public function testGetAppliedDiscounts()
    {
        $field = $this->dto->getAppliedDiscounts();

        $this->assertInstanceOf(\Mindbox\DTO\AppliedDiscountResponseCollection::class, $field);
    }

    public function testGetTotalAcquiredBalanceChange()
    {
        $field = $this->dto->getTotalAcquiredBalanceChange();

        $this->assertSame('some_totalAcquiredBalanceChange', $field);
    }

    public function testGetCreatedPointOfContact()
    {
        $field = $this->dto->getCreatedPointOfContact();

        $this->assertSame('some_createdPointOfContact', $field);
    }

    public function testGetPlaceholders()
    {
        $field = $this->dto->getPlaceholders();

        $this->assertInstanceOf(\Mindbox\DTO\PlaceholderResponseCollection::class, $field);
    }

    public function testGetDiscountsInfo()
    {
        $field = $this->dto->getDiscountsInfo();

        $this->assertInstanceOf(\Mindbox\DTO\DiscountInfoResponseCollection::class, $field);
    }

    public function testGetPaymentsInfo()
    {
        $field = $this->dto->getPaymentsInfo();

        $this->assertInstanceOf(\Mindbox\DTO\PaymentInfoResponseCollection::class, $field);
    }

    public function testGetCreatedDateTimeUtc()
    {
        $field = $this->dto->getCreatedDateTimeUtc();

        $this->assertSame('some_createdDateTimeUtc', $field);
    }

    public function testGetCustomer()
    {
        $field = $this->dto->getCustomer();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerResponseDTO::class, $field);
    }

    public function testGetLines()
    {
        $field = $this->dto->getLines();

        $this->assertInstanceOf(\Mindbox\DTO\LineResponseCollection::class, $field);
    }

    public function testGetPayments()
    {
        $field = $this->dto->getPayments();

        $this->assertInstanceOf(\Mindbox\DTO\PaymentResponseCollection::class, $field);
    }
}
