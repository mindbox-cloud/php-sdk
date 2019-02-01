<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\PossibleDiscountsValueResponseDTO;

/**
 * Class PossibleDiscountsValueResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class PossibleDiscountsValueResponseDTOTest extends DTOTest
{
    /**
     * @var PossibleDiscountsValueResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = PossibleDiscountsValueResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'discount'   => ['amount' => 'some_amount'],
            'itemsCount' => 'some_itemsCount',
            'items'      => ['someField' => 'someValue'],
        ];
        $this->dto = new PossibleDiscountsValueResponseDTO($data);
    }

    public function testGetDiscount()
    {
        $field = $this->dto->getDiscount();

        $this->assertInstanceOf(\Mindbox\DTO\PossibleDiscountsValueDiscountResponseDTO::class, $field);
        $this->assertSame('some_amount', $field->getAmount());
    }

    public function testGetItemsCount()
    {
        $field = $this->dto->getItemsCount();

        $this->assertSame('some_itemsCount', $field);
    }

    public function testGetItems()
    {
        $field = $this->dto->getItems();

        $this->assertInstanceOf(\Mindbox\DTO\PossibleDiscountsValueItemResponseCollection::class, $field);
    }
}
