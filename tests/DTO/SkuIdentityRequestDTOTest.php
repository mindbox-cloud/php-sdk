<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\SkuIdentityRequestDTO;

/**
 * Class SkuIdentityRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class SkuIdentityRequestDTOTest extends DTOTest
{
    /**
     * @var SkuIdentityRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = SkuIdentityRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'ids' => ['someField' => 'someValue'],
        ];
        $this->dto = new SkuIdentityRequestDTO($data);
    }

    public function testGetIds()
    {
        $field = $this->dto->getIds();

        $this->assertSame(['someField' => 'someValue'], $field);
    }

    public function testSetIds()
    {
        $this->dto->setIds(['bitrixId' => 'some_bitrixId']);
        $field = $this->dto->getIds();

        $this->assertSame(['bitrixId' => 'some_bitrixId'], $field);
    }

    public function testGetId()
    {
        $field = $this->dto->getId('someField');

        $this->assertSame('someValue', $field);
    }

    public function testSetId()
    {
        $field = $this->dto->getId('someField');

        $this->assertSame('someValue', $field);

        $this->dto->setId('new_bitrixId', 'new_bitrixId_val');
        $field = $this->dto->getId('new_bitrixId');

        $this->assertSame('new_bitrixId_val', $field);
    }
}
