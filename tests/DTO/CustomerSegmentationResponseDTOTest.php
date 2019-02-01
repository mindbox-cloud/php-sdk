<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\CustomerSegmentationResponseDTO;

/**
 * Class CustomerSegmentationResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class CustomerSegmentationResponseDTOTest extends DTOTest
{
    /**
     * @var CustomerSegmentationResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = CustomerSegmentationResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'segmentation' => ['someField' => 'someValue'],
            'segment'      => ['someField' => 'someValue'],
        ];
        $this->dto = new CustomerSegmentationResponseDTO($data);
    }

    public function testGetSegmentation()
    {
        $field = $this->dto->getSegmentation();

        $this->assertInstanceOf(\Mindbox\DTO\SegmentationResponseDTO::class, $field);
    }

    public function testGetSegment()
    {
        $field = $this->dto->getSegment();

        $this->assertInstanceOf(\Mindbox\DTO\SegmentResponseDTO::class, $field);
    }
}
