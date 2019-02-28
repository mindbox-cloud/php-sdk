<?php

namespace Mindbox\Tests\Responses;

use Mindbox\DTO\OrderResponseDTO;
use Mindbox\MindboxRequest;
use Mindbox\Responses\MindboxOrderResponse;
use PHPUnit\Framework\TestCase;

/**
 * Class MindboxOrderResponseTest
 *
 * @package Mindbox\Tests\Responses
 */
class MindboxOrderResponseTest extends TestCase
{
    /**
     * @var MindboxOrderResponse
     */
    protected $response;

    public function setUp()
    {
        $this->response = new MindboxOrderResponse(
            200,
            [],
            [
                'result' => [
                    'order' => [
                        [
                            'processingStatus' => 'status',
                        ],
                    ],
                ],
            ],
            '',
            new MindboxRequest('', '', '', '', [])
        );
    }

    public function testGetCustomersToMerge()
    {
        $this->assertInstanceOf(OrderResponseDTO::class, $this->response->getOrder());
    }
}
