<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\BalanceChangeKindResponseDTO;

/**
 * Class BalanceChangeKindResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class BalanceChangeKindResponseDTOTest extends DTOTest
{
    /**
     * @var BalanceChangeKindResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = BalanceChangeKindResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'systemName' => 'some_systemName',
        ];
        $this->dto = new BalanceChangeKindResponseDTO($data);
    }

    public function testGetSystemName()
    {
        $field = $this->dto->getSystemName();

        $this->assertSame('some_systemName', $field);
    }
}
