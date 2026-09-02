<?php

namespace Mindbox\Tests;

use Mindbox\Mindbox;
use PHPUnit\Framework\TestCase;

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
        'domainZone'     => 'test',
    ];

    public function setUp(): void
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
                    'domainZone' => 'test',
                ],
            ],
            [
                [
                    'endpointId' => 'test',
                    'secretKey'  => '',
                    'domain'     => 'test',
                    'domainZone' => 'test',
                ],
            ],
            [
                [
                    'endpointId' => 'test',
                    'secretKey'  => 'test',
                    'domain'     => '',
                    'domainZone' => '',
                ],
            ],
            [
                [
                    'endpointId' => 'test',
                    'secretKey'  => 'test',
                    'domain'     => 'test',
                    'domainZone' => 'test',
                    'httpClient' => 'test',
                ],
            ],
        ];
    }

    /**
     * @dataProvider incorrectConfigProvider
     * @covers ::__construct
     *
     * @param array $config
     */
    public function testConstructWithIncorrectConfigWillThrowsException($config)
    {
        $this->expectException(\Mindbox\Exceptions\MindboxConfigException::class);

        new Mindbox($config, $this->logHandler);
    }

    public function testMindboxConstructor()
    {
        $mindbox = new Mindbox($this->correctConfig, $this->logHandler);

        $this->assertInstanceOf(Mindbox::class, $mindbox);
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

    public function testGetClientV3UsesConfiguredDomain()
    {
        $mindbox = new Mindbox([
            'endpointId' => 'test',
            'secretKey' => 'test',
            'domain' => 'api.s.mindbox',
            'domainZone' => 'ru',
        ], $this->logHandler);

        $client = $mindbox->getClientV3()
            ->prepareRequest('POST', 'Operation', null, '', [], true, false);

        $this->assertSame(
            'https://api.s.mindbox.ru/v3/operations/sync?endpointId=test&operation=Operation',
            $client->getRequest()->getUrl()
        );
    }

    public function testGetClientV3UsesDefaultDomainWhenDomainIsEmpty()
    {
        try {
            $mindbox = new Mindbox([
                'endpointId' => 'test',
                'secretKey' => 'test',
                'domain' => '',
                'domainZone' => 'ru',
            ], $this->logHandler);
        } catch (\Mindbox\Exceptions\MindboxConfigException $exception) {
            $this->fail('Empty domain must not prevent using the v3 client');
        }

        $client = $mindbox->getClientV3()
            ->prepareRequest('POST', 'Operation', null, '', [], true, false);

        $this->assertSame(
            'https://api.mindbox.ru/v3/operations/sync?endpointId=test&operation=Operation',
            $client->getRequest()->getUrl()
        );
    }

    public function testGetClientV2ThrowsConfigExceptionWhenDomainIsEmpty()
    {
        try {
            $mindbox = new Mindbox([
                'endpointId' => 'test',
                'secretKey' => 'test',
                'domain' => '',
                'domainZone' => 'ru',
            ], $this->logHandler);
        } catch (\Mindbox\Exceptions\MindboxConfigException $exception) {
            $this->fail('Empty domain must be rejected only when the v2.1 client is requested');
        }

        $this->expectException(\Mindbox\Exceptions\MindboxConfigException::class);
        $this->expectExceptionMessage('Domain cant`t be empty for v2.1 API');

        $mindbox->getClientV2();
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

    public function testGetClientWillThrowException()
    {
        $this->expectException(\Mindbox\Exceptions\MindboxException::class);

        $mindbox = new Mindbox($this->correctConfig, $this->logHandler);

        $mindbox->getClient('test');
    }
}
