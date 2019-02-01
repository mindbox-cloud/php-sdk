<?php

namespace Mindbox\Tests;

use Mindbox\Clients\MindboxClientFactory;
use Mindbox\HttpClients\HttpClientFactory;
use Mindbox\Mindbox;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;

/**
 * Class MindboxTest
 *
 * @coversDefaultClass \Mindbox\Mindbox
 */
class MindboxTest extends TestCase
{
    /**
     * @var \Psr\Log\NullLogger $logHandler
     */
    protected $logHandler;

    /**
     * @var array
     */
    protected $correctConfig = [
        'endpointId' => 'test',
        'secretKey'  => 'test',
        'domain'     => 'test',
    ];

    public function setUp()
    {
        $this->logHandler = new \Psr\Log\NullLogger();
    }

    /**
     * @return array
     */
    public function incorrectConfigProvider()
    {
        return [
            [
                [
                    'endpointId' => '',
                    'secretKey'  => 'test',
                    'domain'     => 'test',
                ],
            ],
            [
                [
                    'endpointId' => 'test',
                    'secretKey'  => '',
                    'domain'     => 'test',
                ],
            ],
            [
                [
                    'endpointId' => 'test',
                    'secretKey'  => 'test',
                    'domain'     => '',
                ],
            ],
            [
                [
                    'endpointId' => 'test',
                    'secretKey'  => 'test',
                    'domain'     => 'test',
                    'httpClient' => 'test',
                ],
            ],
        ];
    }

    /**
     * @dataProvider incorrectConfigProvider
     * @expectedException \Mindbox\Exceptions\MindboxConfigException
     * @covers ::__construct
     *
     * @param $config
     */
    public function testConstructWithIncorrectConfigWillThrowsException($config)
    {
        new Mindbox($config, $this->logHandler);
    }

    public function testMindboxConstructor()
    {
        $mindbox = new Mindbox($this->correctConfig, $this->logHandler);

        $this->assertInstanceOf(Mindbox::class, $mindbox);
    }

    /**
     * @throws ReflectionException
     */
    public function testConstructWithCorrectConfig()
    {
        $httpClientFactoryStub = $this->createMock(HttpClientFactory::class);

        $httpClientFactoryStub->expects($this->once())
            ->method('createHttpClient')
            ->willReturn($this->createMock(\Mindbox\HttpClients\IHttpClient::class));

        $clientFactoryStub = $this->createMock(MindboxClientFactory::class);

        $clientFactoryStub->expects($this->atLeast(2))
            ->method('createMindboxClient');

        $mindboxStub = $this->getMockBuilder(Mindbox::class)
            ->disableOriginalConstructor()
            ->setMethods(['getHttpClientsFactory', 'getMindboxClientFactory', 'setConfig'])
            ->getMock();

        $mindboxStub->expects($this->once())
            ->method('setConfig')
            ->with($this->equalTo($this->correctConfig));

        $mindboxStub->expects($this->once())
            ->method('getHttpClientsFactory')
            ->willReturn($httpClientFactoryStub);

        $mindboxStub->expects($this->atLeast(2))
            ->method('getMindboxClientFactory')
            ->willReturn($clientFactoryStub);

        $reflectedClass = new ReflectionClass(Mindbox::class);
        $constructor    = $reflectedClass->getConstructor();
        $constructor->invoke($mindboxStub, $this->correctConfig, $this->logHandler);
    }

    public function testCustomer()
    {
        $mindbox = new Mindbox($this->correctConfig, $this->logHandler);

        $this->assertInstanceOf(\Mindbox\Helpers\CustomerHelper::class, $mindbox->customer());
    }

    public function testProductList()
    {
        $mindbox = new Mindbox($this->correctConfig, $this->logHandler);

        $this->assertInstanceOf(\Mindbox\Helpers\ProductListHelper::class, $mindbox->productList());
    }

    public function testOrder()
    {
        $mindbox = new Mindbox($this->correctConfig, $this->logHandler);

        $this->assertInstanceOf(\Mindbox\Helpers\OrderHelper::class, $mindbox->order());
    }

    public function testGetClientV3()
    {
        $mindbox = new Mindbox($this->correctConfig, $this->logHandler);

        $this->assertInstanceOf(\Mindbox\Clients\MindboxClientV3::class, $mindbox->getClientV3());
    }

    public function testGetClientV2()
    {
        $mindbox = new Mindbox($this->correctConfig, $this->logHandler);

        $this->assertInstanceOf(\Mindbox\Clients\MindboxClientV2::class, $mindbox->getClientV2());
    }

    /**
     * @throws \Mindbox\Exceptions\MindboxException
     */
    public function testGetClientWillReturnV2()
    {
        $mindbox = new Mindbox($this->correctConfig, $this->logHandler);

        $this->assertInstanceOf(\Mindbox\Clients\MindboxClientV2::class, $mindbox->getClient('v2.1'));
    }

    /**
     * @throws \Mindbox\Exceptions\MindboxException
     */
    public function testGetClientWillReturnV3()
    {
        $mindbox = new Mindbox($this->correctConfig, $this->logHandler);

        $this->assertInstanceOf(\Mindbox\Clients\MindboxClientV3::class, $mindbox->getClient('v3'));
    }

    /**
     * @expectedException  \Mindbox\Exceptions\MindboxException
     */
    public function testGetClientWillThrowException()
    {
        $mindbox = new Mindbox($this->correctConfig, $this->logHandler);

        $mindbox->getClient('test');
    }
}
