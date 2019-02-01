<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\LineResponseDTO;

/**
 * Class LineResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class LineResponseDTOTest extends DTOTest
{
    /**
     * @var LineResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = LineResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'sku'              => ['someField' => 'someValue'],
            'quantity'         => 'some_quantity',
            'customFields'     => ['someField' => 'someValue'],
            'basePricePerItem' => 'some_basePricePerItem',
            'status'           => 'some_status',
            'appliedDiscounts' => [['someField' => 'someValue']],
            'placeHolders'     => [['someField' => 'someValue']],
            'giftCard'         => ['someField' => 'someValue'],
            'discountedPrice'  => 'some_discountedPrice',
        ];
        $this->dto = new LineResponseDTO($data);
    }

    public function testGetSku()
    {
        $field = $this->dto->getSku();

        $this->assertInstanceOf(\Mindbox\DTO\SkuResponseDTO::class, $field);
    }

    public function testGetQuantity()
    {
        $field = $this->dto->getQuantity();

        $this->assertSame('some_quantity', $field);
    }

    public function testGetCustomFields()
    {
        $field = $this->dto->getCustomFields();

        $this->assertSame(['someField' => 'someValue'], $field);
    }

    public function testGetCustomField()
    {
        $field = $this->dto->getCustomField('someField');

        $this->assertSame('someValue', $field);
    }

    public function testGetBasePricePerItem()
    {
        $field = $this->dto->getBasePricePerItem();

        $this->assertSame('some_basePricePerItem', $field);
    }

    public function testGetStatus()
    {
        $field = $this->dto->getStatus();

        $this->assertSame('some_status', $field);
    }

    public function testGetAppliedDiscounts()
    {
        $field = $this->dto->getAppliedDiscounts();

        $this->assertInstanceOf(\Mindbox\DTO\AppliedDiscountResponseCollection::class, $field);
    }

    public function testGetPlaceholders()
    {
        $field = $this->dto->getPlaceholders();

        $this->assertInstanceOf(\Mindbox\DTO\PlaceholderResponseCollection::class, $field);
    }

    public function testGetGiftCard()
    {
        $field = $this->dto->getGiftCard();

        $this->assertInstanceOf(\Mindbox\DTO\GiftCardResponseDTO::class, $field);
    }

    public function testGetDiscountedPrice()
    {
        $field = $this->dto->getDiscountedPrice();

        $this->assertSame('some_discountedPrice', $field);
    }
}
