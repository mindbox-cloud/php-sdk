<?php

namespace Mindbox\Tests\HttpClients;

use Mindbox\HttpClients\AbstractHttpClient;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractHttpClientTest
 *
 * @package Mindbox\Tests\HttpClients
 */
class AbstractHttpClientTest extends TestCase
{
    /**
     * @return array
     */
    public function httpMethodsDataProvider()
    {
        return [
            ['POST'],
            ['GET'],
        ];
    }

    /**
     * @return array
     */
    public function incorrectHttpMethodsDataProvider()
    {
        return [
            ['PUT'],
            ['FAKE'],
        ];
    }

    /**
     * @dataProvider httpMethodsDataProvider
     *
     * @param $method
     *
     * @throws \ReflectionException
     */
    public function testSend($method)
    {
        $abstractHttpClientStub = $this->getMockForAbstractClass(AbstractHttpClient::class);

        $requestStub = $this->getMockBuilder(\Mindbox\MindboxRequest::class)
            ->disableOriginalConstructor()
            ->getMock();

        $requestStub->expects($this->once())
            ->method('getMethod')
            ->willReturn($method);

        $abstractHttpClientStub->expects($this->once())
            ->method('handleRequest')
            ->with($requestStub);

        $abstractHttpClientStub->send($requestStub);
    }

    /**
     * @dataProvider      incorrectHttpMethodsDataProvider
     * @expectedException \Mindbox\Exceptions\MindboxHttpClientException
     *
     * @param $method
     *
     * @throws \ReflectionException
     */
    public function testSendWillThrowExceptionOnIncorrectHttpMethod($method)
    {
        $abstractHttpClientStub = $this->getMockForAbstractClass(AbstractHttpClient::class);

        $requestStub = $this->getMockBuilder(\Mindbox\MindboxRequest::class)
            ->disableOriginalConstructor()
            ->getMock();

        $requestStub->expects($this->once())
            ->method('getMethod')
            ->willReturn($method);

        $abstractHttpClientStub->expects($this->never())
            ->method('handleRequest');

        $abstractHttpClientStub->send($requestStub);
    }
}
