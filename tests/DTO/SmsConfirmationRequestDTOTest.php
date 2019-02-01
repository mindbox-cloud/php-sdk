<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\SmsConfirmationRequestDTO;

/**
 * Class SmsConfirmationRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class SmsConfirmationRequestDTOTest extends DTOTest
{
    /**
     * @var \Mindbox\DTO\SmsConfirmationRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = SmsConfirmationRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'code' => 'some_code',
        ];
        $this->dto = new SmsConfirmationRequestDTO($data);
    }

    public function testGetCode()
    {
        $field = $this->dto->getCode();

        $this->assertSame('some_code', $field);
    }

    public function testSetCode()
    {
        $this->dto->setCode('new_code');
        $field = $this->dto->getCode();

        $this->assertSame('new_code', $field);
    }
}
