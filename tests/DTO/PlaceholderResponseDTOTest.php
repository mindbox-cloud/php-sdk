<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\PlaceholderResponseDTO;

/**
 * Class PlaceholderResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class PlaceholderResponseDTOTest extends DTOTest
{
    /**
     * @var PlaceholderResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = PlaceholderResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'id'      => 'some_id',
            'content' => [['contentItem']],
        ];
        $this->dto = new PlaceholderResponseDTO($data);
    }

    public function testGetId()
    {
        $field = $this->dto->getId();

        $this->assertSame('some_id', $field);
    }

    public function testGetContent()
    {
        $field = $this->dto->getContent();

        $this->assertInstanceOf(\Mindbox\DTO\ContentItemResponseCollection::class, $field);
    }
}
