<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\ContentItemTextResponseDTO;

/**
 * Class ContentItemTextResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class ContentItemTextResponseDTOTest extends DTOTest
{
    /**
     * @var ContentItemTextResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = ContentItemTextResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'type'          => 'some_type',
            'promoActionId' => 'some_promoActionId',
            'value'         => 'some_value',
        ];
        $this->dto = new ContentItemTextResponseDTO($data);
    }

    public function testGetType()
    {
        $field = $this->dto->getType();

        $this->assertSame('some_type', $field);
    }

    public function testGetPromoActionId()
    {
        $field = $this->dto->getPromoActionId();

        $this->assertSame('some_promoActionId', $field);
    }

    public function testGetValue()
    {
        $field = $this->dto->getValue();

        $this->assertSame('some_value', $field);
    }
}
