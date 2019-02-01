<?php

namespace Mindbox\Tests\Helpers;

use Mindbox\Helpers\AbstractMindboxHelper;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractMindboxHelperTest
 *
 * @package Mindbox\Tests\Helpers
 */
class AbstractMindboxHelperTest extends TestCase
{
    /**
     * @var AbstractMindboxHelper $helper
     */
    protected $helper;

    /**
     * @var \Mindbox\Clients\AbstractMindboxClient|\PHPUnit\Framework\MockObject\MockObject $mindboxClientStub
     */
    protected $mindboxClientStub;

    public function setUp()
    {
        $this->mindboxClientStub = $this->getMockBuilder(\Mindbox\Clients\AbstractMindboxClient::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->helper = $this->getMockBuilder(AbstractMindboxHelper::class)
            ->setConstructorArgs([$this->mindboxClientStub])
            ->setMethodsExcept(['getLastResponse', 'sendRequest', 'getRequest'])
            ->getMock();
    }

    public function testGetLastResponse()
    {
        $this->mindboxClientStub->expects($this->once())
            ->method('getLastResponse');

        $this->helper->getLastResponse();
    }

    /**
     * @throws \Mindbox\Exceptions\MindboxBadRequestException
     * @throws \Mindbox\Exceptions\MindboxClientException
     * @throws \Mindbox\Exceptions\MindboxConflictException
     * @throws \Mindbox\Exceptions\MindboxForbiddenException
     * @throws \Mindbox\Exceptions\MindboxNotFoundException
     * @throws \Mindbox\Exceptions\MindboxTooManyRequestsException
     * @throws \Mindbox\Exceptions\MindboxUnauthorizedException
     * @throws \Mindbox\Exceptions\MindboxUnavailableException
     */
    public function testSendRequest()
    {
        $this->mindboxClientStub->expects($this->once())
            ->method('sendRequest');

        $this->helper->sendRequest();
    }

    public function testGetRequest()
    {
        $this->mindboxClientStub->expects($this->once())
            ->method('getRequest');

        $this->helper->getRequest();
    }
}
