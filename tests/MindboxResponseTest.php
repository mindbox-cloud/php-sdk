<?php

namespace Mindbox\Tests;

use Mindbox\DTO\ResultDTO;
use Mindbox\MindboxResponse;
use PHPUnit\Framework\TestCase;

/**
 * Class MindboxResponseTest
 *
 * @coversDefaultClass \Mindbox\MindboxResponse
 */
class MindboxResponseTest extends TestCase
{
    /**
     * @return array
     */
    public function dataProvider()
    {
        return [
            [
                [
                    'headers' => [
                        'Cache-Control'    => 'private',
                        'Content-Type'     => 'application/json; charset=utf-8',
                        'X-Request-ID'     => '8bf2cd5b-4446-41ea-be12-7186d8b6770c',
                        'X-Server-Name'    => 'DUBLIN',
                        'X-Revision'       => 'a6b0bbdf25221d1e23fe197ddca9cc9bf77d07cd',
                        'X-AspNet-Version' => '4.0.30319',
                        'X-Powered-By'     => 'ASP.NET',
                        'Date'             => 'Mon, 17 Dec 2018 11:47:32 GMT',
                        'Connection'       => 'close',
                        'Content-Length'   => '63',
                    ],
                    'body'    => [
                        'status'   => 'Success',
                        'customer' => [
                            'processingStatus' => 'NotFound',
                        ],
                    ],
                    'code'    => 200,
                    'rawBody' => '<result><status>Success</status><customer><processingStatus>NotFound</processingStatus></customer></result>',
                    'request' => $this->createMock(\Mindbox\MindboxRequest::class),
                    'isError' => false,
                ],
            ],
            [
                [
                    'headers' => [
                        'Cache-Control'    => 'private',
                        'Content-Type'     => 'application/json; charset=utf-8',
                        'X-Request-ID'     => '8bf2cd5b-4446-41ea-be12-7186d8b6770c',
                        'X-Server-Name'    => 'DUBLIN',
                        'X-Revision'       => 'a6b0bbdf25221d1e23fe197ddca9cc9bf77d07cd',
                        'X-AspNet-Version' => '4.0.30319',
                        'X-Powered-By'     => 'ASP.NET',
                        'Date'             => 'Mon, 17 Dec 2018 11:47:32 GMT',
                        'Connection'       => 'close',
                        'Content-Length'   => '63',
                    ],
                    'body'    => [
                        'status'             => 'Error',
                        'customer'           => [
                            'processingStatus' => 'NotFound',
                        ],
                        'validationMessages' => ['messages'],
                    ],
                    'code'    => 500,
                    'rawBody' => '<result><status>Error</status><customer><processingStatus>NotFound</processingStatus></customer><validationMessages><validationMessage>message</validationMessage></validationMessage></result>',
                    'request' => $this->createMock(\Mindbox\MindboxRequest::class),
                    'isError' => true,
                ],
            ],
            [
                [
                    'headers' => [
                        'Cache-Control'    => 'private',
                        'Content-Type'     => 'application/json; charset=utf-8',
                        'X-Request-ID'     => '8bf2cd5b-4446-41ea-be12-7186d8b6770c',
                        'X-Server-Name'    => 'DUBLIN',
                        'X-Revision'       => 'a6b0bbdf25221d1e23fe197ddca9cc9bf77d07cd',
                        'X-AspNet-Version' => '4.0.30319',
                        'X-Powered-By'     => 'ASP.NET',
                        'Date'             => 'Mon, 17 Dec 2018 11:47:32 GMT',
                        'Connection'       => 'close',
                        'Content-Length'   => '63',
                    ],
                    'body'    => [
                        'orders' => [
                            'order' => 'orderInfo',
                        ],
                    ],
                    'code'    => 200,
                    'rawBody' => '<result><orders><order>orderInfo</order></orders></result>',
                    'request' => $this->createMock(\Mindbox\MindboxRequest::class),
                    'isError' => false,
                ],
            ],
            [
                [
                    'headers' => [
                        'Cache-Control'    => 'private',
                        'Content-Type'     => 'application/json; charset=utf-8',
                        'X-Request-ID'     => '8bf2cd5b-4446-41ea-be12-7186d8b6770c',
                        'X-Server-Name'    => 'DUBLIN',
                        'X-Revision'       => 'a6b0bbdf25221d1e23fe197ddca9cc9bf77d07cd',
                        'X-AspNet-Version' => '4.0.30319',
                        'X-Powered-By'     => 'ASP.NET',
                        'Date'             => 'Mon, 17 Dec 2018 11:47:32 GMT',
                        'Connection'       => 'close',
                        'Content-Length'   => '63',
                    ],
                    'body'    => [
                        'status'             => 'Error',
                        'customer'           => [
                            'processingStatus' => 'NotFound',
                        ],
                        'validationMessages' => ['messages'],
                    ],
                    'code'    => 500,
                    'rawBody' => '<result><status>Error</status><customer><processingStatus>NotFound</processingStatus></customer><validationMessages><validationMessage>message</validationMessage></validationMessage></result>',
                    'request' => $this->createMock(\Mindbox\MindboxRequest::class),
                    'isError' => true,
                ],
            ],
            [
                [
                    'headers' => [
                        'Cache-Control'    => 'private',
                        'Content-Type'     => 'application/json; charset=utf-8',
                        'X-Request-ID'     => '8bf2cd5b-4446-41ea-be12-7186d8b6770c',
                        'X-Server-Name'    => 'DUBLIN',
                        'X-Revision'       => 'a6b0bbdf25221d1e23fe197ddca9cc9bf77d07cd',
                        'X-AspNet-Version' => '4.0.30319',
                        'X-Powered-By'     => 'ASP.NET',
                        'Date'             => 'Mon, 17 Dec 2018 11:47:32 GMT',
                        'Connection'       => 'close',
                        'Content-Length'   => '63',
                    ],
                    'body'    => [],
                    'code'    => 200,
                    'rawBody' => '',
                    'request' => $this->createMock(\Mindbox\MindboxRequest::class),
                    'isError' => true,
                ],
            ],
            [
                [
                    'headers' => [
                        'Cache-Control'    => 'private',
                        'Content-Type'     => 'application/json; charset=utf-8',
                        'X-Request-ID'     => '8bf2cd5b-4446-41ea-be12-7186d8b6770c',
                        'X-Server-Name'    => 'DUBLIN',
                        'X-Revision'       => 'a6b0bbdf25221d1e23fe197ddca9cc9bf77d07cd',
                        'X-AspNet-Version' => '4.0.30319',
                        'X-Powered-By'     => 'ASP.NET',
                        'Date'             => 'Mon, 17 Dec 2018 11:47:32 GMT',
                        'Connection'       => 'close',
                        'Content-Length'   => '63',
                    ],
                    'body'    => [
                        'result' => [
                            'orders' => [
                                'order' => 'orderInfo',
                            ],
                        ],
                    ],
                    'code'    => 200,
                    'rawBody' => '<result><status>Error</status><customer><processingStatus>NotFound</processingStatus></customer><validationMessages><validationMessage>message</validationMessage></validationMessage></result>',
                    'request' => $this->createMock(\Mindbox\MindboxRequest::class),
                    'isError' => false,
                ],
            ],
        ];
    }

    /**
     * @dataProvider dataProvider
     * @covers       ::__construct
     *
     * @param $args
     */
    public function testResponseConstructor($args)
    {
        $response = new MindboxResponse(
            $args['code'],
            $args['headers'],
            $args['body'],
            $args['rawBody'],
            $args['request']
        );

        $this->assertInstanceOf(MindboxResponse::class, $response);
    }

    /**
     * @dataProvider dataProvider
     * @covers       ::getHeaders
     *
     * @param $args
     */
    public function testGetHeaders($args)
    {
        $response = new MindboxResponse(
            $args['code'],
            $args['headers'],
            $args['body'],
            $args['rawBody'],
            $args['request']
        );

        $this->assertSame($args['headers'], $response->getHeaders());
    }

    /**
     * @dataProvider dataProvider
     * @covers       ::getBody
     *
     * @param $args
     */
    public function testGetBody($args)
    {
        $response = new MindboxResponse(
            $args['code'],
            $args['headers'],
            $args['body'],
            $args['rawBody'],
            $args['request']
        );

        $this->assertSame($args['body'], $response->getBody());
    }

    /**
     * @dataProvider dataProvider
     * @covers       ::getMindboxStatus
     *
     * @param $args
     */
    public function testGetMindboxStatus($args)
    {
        $response = new MindboxResponse(
            $args['code'],
            $args['headers'],
            $args['body'],
            $args['rawBody'],
            $args['request']
        );

        $status = isset($args['body']['status']) ? $args['body']['status'] : null;

        $this->assertSame($status, $response->getMindboxStatus());
    }

    /**
     * @dataProvider dataProvider
     * @covers       ::getValidationErrors
     *
     * @param $args
     */
    public function testGetValidationErrors($args)
    {
        $response = new MindboxResponse(
            $args['code'],
            $args['headers'],
            $args['body'],
            $args['rawBody'],
            $args['request']
        );

        $validationMessages = isset($args['body']['validationMessages']) ? $args['body']['validationMessages'] : null;

        $this->assertSame($validationMessages, $response->getValidationErrors());
    }

    /**
     * @dataProvider dataProvider
     * @covers       ::getHttpCode
     *
     * @param $args
     */
    public function testGetHttpCode($args)
    {
        $response = new MindboxResponse(
            $args['code'],
            $args['headers'],
            $args['body'],
            $args['rawBody'],
            $args['request']
        );

        $this->assertSame($args['code'], $response->getHttpCode());
    }

    /**
     * @dataProvider dataProvider
     * @covers       ::isError
     *
     * @param $args
     */
    public function testIsError($args)
    {
        $response = new MindboxResponse(
            $args['code'],
            $args['headers'],
            $args['body'],
            $args['rawBody'],
            $args['request']
        );

        $this->assertSame($args['isError'], $response->isError());
    }

    /**
     * @dataProvider dataProvider
     * @covers       ::getRequest
     *
     * @param $args
     */
    public function testGetRequest($args)
    {
        $response = new MindboxResponse(
            $args['code'],
            $args['headers'],
            $args['body'],
            $args['rawBody'],
            $args['request']
        );

        $this->assertSame($args['request'], $response->getRequest());
    }

    /**
     * @dataProvider dataProvider
     * @covers       ::getRawBody
     *
     * @param $args
     */
    public function testGetRawBody($args)
    {
        $response = new MindboxResponse(
            $args['code'],
            $args['headers'],
            $args['body'],
            $args['rawBody'],
            $args['request']
        );

        $this->assertSame($args['rawBody'], $response->getRawBody());
    }

    /**
     * @dataProvider dataProvider
     * @covers       ::getResult
     *
     * @param $args
     */
    public function testGetResult($args)
    {
        $response = new MindboxResponse(
            $args['code'],
            $args['headers'],
            $args['body'],
            $args['rawBody'],
            $args['request']
        );

        $this->assertInstanceOf(ResultDTO::class, $response->getResult());
    }
}
