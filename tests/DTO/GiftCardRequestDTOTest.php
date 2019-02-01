<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\GiftCardRequestDTO;

/**
 * Class GiftCardRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class GiftCardRequestDTOTest extends DTOTest
{
    /**
     * @var GiftCardRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = GiftCardRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'id'          => 'some_id',
            'getFromPool' => 'some_getFromPool',
        ];
        $this->dto = new GiftCardRequestDTO($data);
    }

    public function testGetId()
    {
        $field = $this->dto->getId();

        $this->assertSame('some_id', $field);
    }

    public function testSetId()
    {
        $this->dto->setId('new_id');
        $field = $this->dto->getId();

        $this->assertSame('new_id', $field);
    }

    public function testGetGetFromPool()
    {
        $field = $this->dto->getGetFromPool();

        $this->assertSame('some_getFromPool', $field);
    }

    public function testSetGetFromPool()
    {
        $this->dto->setGetFromPool('new_getFromPool');
        $field = $this->dto->getGetFromPool();

        $this->assertSame('new_getFromPool', $field);
    }
}
