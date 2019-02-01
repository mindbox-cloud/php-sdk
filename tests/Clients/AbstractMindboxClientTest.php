<?php

namespace Mindbox\Tests\Clients;

use Mindbox\Clients\AbstractMindboxClient;
use Mindbox\Exceptions\MindboxHttpClientException;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractMindboxClientTest
 *
 * @package Mindbox\Tests\Clients
 */
class AbstractMindboxClientTest extends TestCase
{
    /**
     * @var string
     */
    private $body = '{"this":"is":["json"]}';

    /**
     * @var string
     */
    protected $secret = 'secret';

    /**
     * @var string
     */
    private $authHeader = 'authHeader';

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Mindbox\HttpClients\AbstractHttpClient
     */
    protected $httpClientStub;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Mindbox\Loggers\MindboxFileLogger
     */
    protected $loggerStub;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|AbstractMindboxClient
     */
    protected $client;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Mindbox\DTO\DTO
     */
    protected $dtoStub;

    public function setUp()
    {
        $this->httpClientStub = $this->getHttpClientStub();
        $this->loggerStub     = $this->getLoggerStub();
        $this->client         = $this->getClient($this->secret, $this->httpClientStub, $this->loggerStub);
        $this->dtoStub        = $this->getDTOStub();
    }

    /**
     * @return array
     */
    public function expectedArgsForSendProvider()
    {
        return [
            [
                [
                    'POST',
                    'operation',
                    $this->getDTOStub(),
                ],
                [
                    'apiVer'  => '',
                    'url'     => null,
                    'method'  => 'POST',
                    'body'    => $this->getDTOStub()->toJson(),
                    'headers' => [
                        'Accept'        => 'application/json',
                        'Content-Type'  => 'application/json',
                        'Authorization' => $this->authHeader,
                    ],
                ],
            ],
            [
                [
                    'GET',
                    'operation',
                    $this->getDTOStub(),
                    'url',
                    ['param' => 'pam-pam'],
                ],
                [
                    'apiVer'  => '',
                    'url'     => null,
                    'method'  => 'GET',
                    'body'    => $this->getDTOStub()->toJson(),
                    'headers' => [
                        'Accept'        => 'application/json',
                        'Content-Type'  => 'application/json',
                        'Authorization' => $this->authHeader,
                    ],
                ],
            ],
        ];
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject
     */
    protected function getDTOStub()
    {
        $dtoStub = $this->getMockBuilder(\Mindbox\DTO\DTO::class)
            ->disableOriginalConstructor()
            ->getMock();

        $dtoStub->expects($this->any())
            ->method('toJson')
            ->willReturn($this->body);

        return $dtoStub;
    }

    /**
     * @return array
     */
    public function expectedExceptionProvider()
    {
        return [
            [
                'body'              => '',
                'code'              => 200,
                'expectedLogMethod' => 'error',
                'expectedException' => \Mindbox\Exceptions\MindboxClientException::class,
            ],
            [
                'body'              => 'body',
                'code'              => 500,
                'expectedLogMethod' => 'alert',
                'expectedException' => \Mindbox\Exceptions\MindboxUnavailableException::class,
            ],
            [
                'body'              => 'body',
                'code'              => 503,
                'expectedLogMethod' => 'alert',
                'expectedException' => \Mindbox\Exceptions\MindboxUnavailableException::class,
            ],
            [
                'body'              => 'body',
                'code'              => 400,
                'expectedLogMethod' => 'error',
                'expectedException' => \Mindbox\Exceptions\MindboxBadRequestException::class,
            ],
            [
                'body'              => 'body',
                'code'              => 409,
                'expectedLogMethod' => 'error',
                'expectedException' => \Mindbox\Exceptions\MindboxConflictException::class,
            ],
            [
                'body'              => 'body',
                'code'              => 404,
                'expectedLogMethod' => 'error',
                'expectedException' => \Mindbox\Exceptions\MindboxNotFoundException::class,
            ],
            [
                'body'              => 'body',
                'code'              => 403,
                'expectedLogMethod' => 'error',
                'expectedException' => \Mindbox\Exceptions\MindboxForbiddenException::class,
            ],
            [
                'body'              => 'body',
                'code'              => 401,
                'expectedLogMethod' => 'error',
                'expectedException' => \Mindbox\Exceptions\MindboxUnauthorizedException::class,
            ],
            [
                'body'              => 'body',
                'code'              => 429,
                'expectedLogMethod' => 'error',
                'expectedException' => \Mindbox\Exceptions\MindboxTooManyRequestsException::class,
            ],
            [
                'body'              => 'body',
                'code'              => 666,
                'expectedLogMethod' => 'error',
                'expectedException' => \Mindbox\Exceptions\MindboxClientException::class,
            ],
        ];
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject
     */
    protected function getHttpClientStub()
    {
        $httpClientStub = $this->getMockBuilder(\Mindbox\HttpClients\IHttpClient::class)
            ->disableOriginalConstructor()
            ->getMock();

        return $httpClientStub;
    }

    /**
     * @param int|null    $code
     * @param string|null $body
     *
     * @return \PHPUnit\Framework\MockObject\MockObject
     */
    protected function getRawResponseStub($code = null, $body = null)
    {
        $rawResponseStub = $this->getMockBuilder(\Mindbox\HttpClients\HttpClientRawResponse::class)
            ->disableOriginalConstructor()
            ->getMock();

        $rawResponseStub->expects($this->any())
            ->method('getStatusCode')
            ->willReturn($code);

        $rawResponseStub->expects($this->any())
            ->method('getBody')
            ->willReturn($body);

        return $rawResponseStub;
    }

    /**
     * @param $expected
     *
     * @return \Mindbox\MindboxRequest
     */
    protected function getRequestStub($expected)
    {
        $requestStub = new \Mindbox\MindboxRequest(
            $expected['apiVer'],
            $expected['url'],
            $expected['method'],
            $expected['body'],
            $expected['headers']
        );

        return $requestStub;
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject
     */
    protected function getLoggerStub()
    {
        $loggerStub = $this->getMockBuilder(\Psr\Log\LoggerInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        return $loggerStub;
    }

    /**
     * @param $secret
     * @param $httpClient
     * @param $loggerClient
     *
     * @return \PHPUnit\Framework\MockObject\MockObject|AbstractMindboxClient
     */
    protected function getClient($secret, $httpClient, $loggerClient)
    {
        $clientStub = $this->getMockBuilder(AbstractMindboxClient::class)
            ->setMethods(['prepareUrl', 'prepareQueryParams', 'prepareAuthorizationHeader'])
            ->setConstructorArgs([$secret, $httpClient, $loggerClient])
            ->getMock();

        $clientStub->expects($this->any())
            ->method('prepareQueryParams')
            ->willReturn([]);

        $clientStub->expects($this->any())
            ->method('prepareAuthorizationHeader')
            ->willReturn($this->authHeader);

        return $clientStub;
    }

    /**
     * @dataProvider expectedArgsForSendProvider
     *
     * @param $params
     * @param $expected
     */
    public function testPrepareRequest($params, $expected)
    {
        $client = $this->client;

        $this->assertSame(null, $client->getRequest());

        $client->prepareRequest(...$params);

        $this->assertEquals($this->getRequestStub($expected), $client->getRequest());
    }

    /**
     * @dataProvider expectedArgsForSendProvider
     *
     * @param $params
     * @param $expected
     */
    public function testSetRequest($params, $expected)
    {
        $client = $this->client;

        $client->setRequest($this->getRequestStub($expected));

        $this->assertEquals($this->getRequestStub($expected), $client->getRequest());
    }

    /**
     * @dataProvider expectedArgsForSendProvider
     *
     * @param $params
     * @param $expected
     */
    public function testGetPreparedRequest($params, $expected)
    {
        $client = $this->client;

        $this->assertSame(null, $client->getRequest());

        $client->setRequest($this->getRequestStub($expected));

        $this->assertEquals($this->getRequestStub($expected), $client->getRequest());
    }

    /**
     * @dataProvider expectedArgsForSendProvider
     *
     * @param $params
     * @param $expected
     *
     * @throws \Mindbox\Exceptions\MindboxBadRequestException
     * @throws \Mindbox\Exceptions\MindboxClientException
     * @throws \Mindbox\Exceptions\MindboxConflictException
     * @throws \Mindbox\Exceptions\MindboxForbiddenException
     * @throws \Mindbox\Exceptions\MindboxNotFoundException
     * @throws \Mindbox\Exceptions\MindboxTooManyRequestsException
     * @throws \Mindbox\Exceptions\MindboxUnauthorizedException
     * @throws \Mindbox\Exceptions\MindboxUnavailableException
     */
    public function testSendPreparedRequest($params, $expected)
    {
        $client = $this->client;

        $rawResponseStub = $this->getRawResponseStub(200, 'body');

        $this->httpClientStub->expects($this->once())
            ->method('send')
            ->with($this->getRequestStub($expected))
            ->willReturn($rawResponseStub);

        $this->loggerStub->expects($this->once())
            ->method('info');

        $response = $client->prepareRequest(...$params)
            ->sendRequest();

        $this->assertInstanceOf(\Mindbox\MindboxResponse::class, $response);
    }

    /**
     * @expectedException \Mindbox\Exceptions\MindboxClientException
     *
     * @throws \Mindbox\Exceptions\MindboxBadRequestException
     * @throws \Mindbox\Exceptions\MindboxClientException
     * @throws \Mindbox\Exceptions\MindboxConflictException
     * @throws \Mindbox\Exceptions\MindboxForbiddenException
     * @throws \Mindbox\Exceptions\MindboxNotFoundException
     * @throws \Mindbox\Exceptions\MindboxTooManyRequestsException
     * @throws \Mindbox\Exceptions\MindboxUnauthorizedException
     * @throws \Mindbox\Exceptions\MindboxUnavailableException
     */
    public function testSendPreparedRequestWillThrowExceptionWhenRequestEmpty()
    {
        $client = $this->client;

        $client->sendRequest();
    }

    /**
     * @expectedException \Mindbox\Exceptions\MindboxClientException
     *
     * @throws \Mindbox\Exceptions\MindboxBadRequestException
     * @throws \Mindbox\Exceptions\MindboxClientException
     * @throws \Mindbox\Exceptions\MindboxConflictException
     * @throws \Mindbox\Exceptions\MindboxForbiddenException
     * @throws \Mindbox\Exceptions\MindboxNotFoundException
     * @throws \Mindbox\Exceptions\MindboxTooManyRequestsException
     * @throws \Mindbox\Exceptions\MindboxUnauthorizedException
     * @throws \Mindbox\Exceptions\MindboxUnavailableException
     */
    public function testSendPreparedRequestWillThrowExceptionWhenHttpClientThrowException()
    {
        $client = $this->client;

        $this->httpClientStub->expects($this->once())
            ->method('send')
            ->willThrowException(new MindboxHttpClientException());

        $client->prepareRequest('POST', 'operation', $this->getDTOStub())
            ->sendRequest();
    }

    /**
     * @dataProvider expectedArgsForSendProvider
     *
     * @param $params
     * @param $expected
     *
     * @throws \Mindbox\Exceptions\MindboxBadRequestException
     * @throws \Mindbox\Exceptions\MindboxClientException
     * @throws \Mindbox\Exceptions\MindboxConflictException
     * @throws \Mindbox\Exceptions\MindboxForbiddenException
     * @throws \Mindbox\Exceptions\MindboxNotFoundException
     * @throws \Mindbox\Exceptions\MindboxTooManyRequestsException
     * @throws \Mindbox\Exceptions\MindboxUnauthorizedException
     * @throws \Mindbox\Exceptions\MindboxUnavailableException
     */
    public function testGetLastResponse($params, $expected)
    {
        $rawResponseStub = $this->getRawResponseStub(200, 'body');

        $this->httpClientStub->expects($this->any())
            ->method('send')
            ->with($this->getRequestStub($expected))
            ->willReturn($rawResponseStub);

        $this->assertSame(null, $this->client->getLastResponse());

        $response = $this->client->prepareRequest(...$params)
            ->sendRequest();

        $this->assertSame($response, $this->client->getLastResponse());

        $this->assertInstanceOf(\Mindbox\MindboxResponse::class, $this->client->getLastResponse());
    }

    /**
     * @dataProvider expectedExceptionProvider
     *
     * @param $body
     * @param $code
     * @param $expectedLogMethod
     * @param $expectedException
     *
     * @throws \Mindbox\Exceptions\MindboxBadRequestException
     * @throws \Mindbox\Exceptions\MindboxClientException
     * @throws \Mindbox\Exceptions\MindboxConflictException
     * @throws \Mindbox\Exceptions\MindboxForbiddenException
     * @throws \Mindbox\Exceptions\MindboxNotFoundException
     * @throws \Mindbox\Exceptions\MindboxTooManyRequestsException
     * @throws \Mindbox\Exceptions\MindboxUnauthorizedException
     * @throws \Mindbox\Exceptions\MindboxUnavailableException
     */
    public function testSendRequestWillThrowHttpClientException($body, $code, $expectedLogMethod, $expectedException)
    {
        $client = $this->client;

        $rawResponseStub = $this->getRawResponseStub($code, $body);

        $this->httpClientStub->expects($this->any())
            ->method('send')
            ->willReturn($rawResponseStub);

        $this->loggerStub->expects($this->once())
            ->method($expectedLogMethod);

        $this->expectException($expectedException);

        $client->prepareRequest('POST', 'operation', $this->getDTOStub())
            ->sendRequest();
    }
}
