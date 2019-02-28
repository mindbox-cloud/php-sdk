<?php

namespace Mindbox\Tests\Responses;

use Mindbox\DTO\CustomerIdentityResponseCollection;
use Mindbox\DTO\CustomerIdentityResponseDTO;
use Mindbox\MindboxRequest;
use Mindbox\Responses\MindboxMergeCustomersResponse;
use PHPUnit\Framework\TestCase;

/**
 * Class MindboxMergeCustomersResponseTest
 *
 * @package Mindbox\Tests\Responses
 */
class MindboxMergeCustomersResponseTest extends TestCase
{
    /**
     * @var MindboxMergeCustomersResponse
     */
    protected $response;

    public function setUp()
    {
        $this->response = new MindboxMergeCustomersResponse(
            200,
            [],
            [
                'result' => [
                    'customersToMerge' => [
                        [
                            'processingStatus' => 'status',
                        ],
                    ],
                    'resultingCustomer' => [
                        'processingStatus' => 'status',
                    ],
                ],
            ],
            '',
            new MindboxRequest('', '', '', '', [])
        );
    }

    public function testGetCustomersToMerge()
    {
        $this->assertInstanceOf(CustomerIdentityResponseCollection::class, $this->response->getCustomersToMerge());
    }

    public function testGetResultingCustomer()
    {
        $this->assertInstanceOf(CustomerIdentityResponseDTO::class, $this->response->getResultingCustomer());
    }
}
