<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\DiscountCardTypeResponseDTO;

/**
 * Class DiscountCardTypeResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class DiscountCardTypeResponseDTOTest extends DTOTest
{
    /**
     * @var DiscountCardTypeResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = DiscountCardTypeResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'id' => 'some_id',
        ];
        $this->dto = new DiscountCardTypeResponseDTO($data);
    }

    public function testGetId()
    {
        $field = $this->dto->getId();

        $this->assertSame('some_id', $field);
    }
}
