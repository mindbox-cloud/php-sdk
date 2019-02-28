<?php

namespace Mindbox\Tests\Responses;

use Mindbox\DTO\CustomerResponseDTO;
use Mindbox\MindboxRequest;
use Mindbox\Responses\MindboxCustomerResponse;
use PHPUnit\Framework\TestCase;

/**
 * Class MindboxCustomerResponseTest
 *
 * @package Mindbox\Tests\Responses
 */
class MindboxCustomerResponseTest extends TestCase
{
    /**
     * @var MindboxCustomerResponse
     */
    protected $response;

    public function setUp()
    {
        $this->response = new MindboxCustomerResponse(
            200,
            [],
            [
                'result' => [
                    'customer' => [
                        'processingStatus' => 'status',
                    ],
                ],
            ],
            '',
            new MindboxRequest('', '', '', '', [])
        );
    }

    public function testGetCustomerIdentity()
    {
        $this->assertInstanceOf(CustomerResponseDTO::class, $this->response->getCustomer());
    }
}
