<?php

namespace Mindbox\Tests\DTO\V3\Responses;

use Mindbox\DTO\V3\Responses\SkuIdentityResponseDTO;
use Mindbox\Tests\DTO\DTOTest;

/**
 * Class SkuIdentityResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class SkuIdentityResponseDTOTest extends DTOTest
{
    /**
     * @var SkuIdentityResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = SkuIdentityResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'ids' => ['someField' => 'someValue'],
        ];
        $this->dto = new SkuIdentityResponseDTO($data);
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
}
