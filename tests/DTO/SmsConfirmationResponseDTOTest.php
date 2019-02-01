<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\SmsConfirmationResponseDTO;

/**
 * Class SmsConfirmationResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class SmsConfirmationResponseDTOTest extends DTOTest
{
    /**
     * @var \Mindbox\DTO\SmsConfirmationResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = SmsConfirmationResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'processingStatus' => 'some_processingStatus',
        ];
        $this->dto = new SmsConfirmationResponseDTO($data);
    }

    public function testGetProcessingStatus()
    {
        $field = $this->dto->getProcessingStatus();

        $this->assertSame('some_processingStatus', $field);
    }
}
