<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\LineRequestDTO;

/**
 * Class LineRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class LineRequestDTOTest extends DTOTest
{
    /**
     * @var LineRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = LineRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'sku'          => ['someField' => 'someValue'],
            'quantity'     => 'some_quantity',
            'customFields' => ['someField' => 'someValue'],
            'status'       => 'some_status',
            'giftCard'     => ['someField' => 'someValue'],
            'discounts'    => [['someField' => 'someValue']],

            'basePricePerItem' => 'some_basePricePerItem',
            'appliedDiscounts' => [['someField' => 'someValue']],
            'placeHolders'     => [['someField' => 'someValue']],
        ];
        $this->dto = new LineRequestDTO($data);
    }

    public function testGetSku()
    {
        $field = $this->dto->getSku();

        $this->assertInstanceOf(\Mindbox\DTO\SkuRequestDTO::class, $field);
    }

    public function testSetSku()
    {
        $this->dto->setSku(['skuId' => 'some_skuId']);
        $field = $this->dto->getSku();

        $this->assertInstanceOf(\Mindbox\DTO\SkuRequestDTO::class, $field);
        $this->assertSame('some_skuId', $field->getSkuId());
    }

    public function testGetQuantity()
    {
        $field = $this->dto->getQuantity();

        $this->assertSame('some_quantity', $field);
    }

    public function testSetQuantity()
    {
        $this->dto->setQuantity('new_quantity');
        $field = $this->dto->getQuantity();

        $this->assertSame('new_quantity', $field);
    }

    public function testGetCustomFields()
    {
        $field = $this->dto->getCustomFields();

        $this->assertSame(['someField' => 'someValue'], $field);
    }

    public function testSetCustomFields()
    {
        $setField = ['customField' => ['topic' => 'some_topic']];
        $this->dto->setCustomFields($setField);
        $field = $this->dto->getCustomFields();

        $this->assertSame($setField, $field);
    }

    public function testGetCustomField()
    {
        $field = $this->dto->getCustomField('someField');

        $this->assertSame('someValue', $field);
    }

    public function testSetCustomField()
    {
        $this->dto->setCustomField('customField', ['some_topic']);
        $field = $this->dto->getCustomField('customField');

        $this->assertSame(['some_topic'], $field);
    }

    public function testGetStatus()
    {
        $field = $this->dto->getStatus();

        $this->assertSame('some_status', $field);
    }

    public function testSetStatus()
    {
        $this->dto->setStatus('new_status');
        $field = $this->dto->getStatus();

        $this->assertSame('new_status', $field);
    }

    public function testGetGiftCard()
    {
        $field = $this->dto->getGiftCard();

        $this->assertInstanceOf(\Mindbox\DTO\GiftCardRequestDTO::class, $field);
    }

    public function testSetGiftCard()
    {
        $this->dto->setGiftCard(['id' => 'some_id']);
        $field = $this->dto->getGiftCard();

        $this->assertInstanceOf(\Mindbox\DTO\GiftCardRequestDTO::class, $field);
        $this->assertSame('some_id', $field->getId());
    }

    public function testGetDiscounts()
    {
        $field = $this->dto->getDiscounts();

        $this->assertInstanceOf(\Mindbox\DTO\DiscountRequestCollection::class, $field);
    }

    public function testSetDiscounts()
    {
        $this->dto->setDiscounts([['type' => 'some_type'], ['type' => 'some_type', 'amount' => 'some_amount']]);
        $field = $this->dto->getDiscounts();

        $this->assertInstanceOf(\Mindbox\DTO\DiscountRequestCollection::class, $field);

        foreach ($field->all() as $discount) {
            $this->assertSame('some_type', $discount->getType());
        }
    }
}
