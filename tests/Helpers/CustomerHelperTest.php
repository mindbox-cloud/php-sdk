<?php

namespace Mindbox\Tests\Helpers;

use Mindbox\DTO\OperationDTO;
use Mindbox\Helpers\CustomerHelper;

/**
 * Class CustomerHelperTest
 *
 * @package Mindbox\Tests\Helpers
 */
class CustomerHelperTest extends AbstractMindboxHelperTest
{
    /**
     * @var CustomerHelper $orderHelper
     */
    protected $helper;

    /**
     * @var \Mindbox\Clients\AbstractMindboxClient|\PHPUnit\Framework\MockObject\MockObject $mindboxClientStub
     */
    protected $mindboxClientStub;

    /**
     * @var \Mindbox\MindboxResponse|\PHPUnit\Framework\MockObject\MockObject $mindboxResponseStub
     */
    protected $mindboxResponseStub;

    public function setUp()
    {
        $this->mindboxResponseStub = $this->createMock(\Mindbox\MindboxResponse::class);

        $this->mindboxClientStub = $this->getMindboxClientStub();

        $this->helper = new CustomerHelper($this->mindboxClientStub);
    }

    public function testGetBalance()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->getBalance($dto, $operationName, $addDeviceUUID);
    }

    public function testMerge()
    {
        $dto           = new \Mindbox\DTO\MergeCustomersRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $dto, '', [], true, $addDeviceUUID);

        $this->helper->merge($dto, $operationName, $addDeviceUUID);
    }

    public function testGetBonusPointsHistory()
    {
        $customerDto   = new \Mindbox\DTO\CustomerRequestDTO();
        $pageDto       = new \Mindbox\DTO\PageRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($customerDto);
        $operationDto->setPage($pageDto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->getBonusPointsHistory(
            $customerDto,
            $pageDto,
            $operationName,
            $addDeviceUUID
        );
    }

    public function testAuthorize()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], false, $addDeviceUUID);

        $this->helper->authorize($dto, $operationName, $addDeviceUUID);
    }

    public function testCheckActive()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->checkActive($dto, $operationName, $addDeviceUUID);
    }

    public function testCheckByMail()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->checkByMail($dto, $operationName, $addDeviceUUID);
    }

    public function testFill()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->fill($dto, $operationName, $addDeviceUUID);
    }

    public function testSubscribe()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->subscribe($dto, $operationName, $addDeviceUUID);
    }

    public function testEdit()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->edit($dto, $operationName, $addDeviceUUID);
    }

    public function testRegister()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->register($dto, $operationName, $addDeviceUUID);
    }

    public function testResendConfirmationCode()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->resendConfirmationCode($dto, $operationName, $addDeviceUUID);
    }

    public function testCheckByPhone()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->checkByPhone($dto, $operationName, $addDeviceUUID);
    }

    public function testSendAuthorizationCode()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->sendAuthorizationCode($dto, $operationName, $addDeviceUUID);
    }

    public function testGetDataByDiscountCard()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->getDataByDiscountCard($dto, $operationName, $addDeviceUUID);
    }

    public function testAutoConfirmMobile()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], false, $addDeviceUUID);

        $this->helper->autoConfirmMobile($dto, $operationName, $addDeviceUUID);
    }

    public function testConfirmMobile()
    {
        $dto             = new \Mindbox\DTO\CustomerRequestDTO();
        $smsConfirmation = new \Mindbox\DTO\SmsConfirmationRequestDTO();
        $operationName   = 'Website.OperationName';
        $addDeviceUUID   = false;

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $operationDto->setSmsConfirmation($smsConfirmation);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->confirmMobile($dto, $smsConfirmation, $operationName, $addDeviceUUID);
    }

    public function testCheckAuthorizationCode()
    {
        $dto           = new \Mindbox\DTO\CustomerRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;
        $authCode      = 'authCode';

        $operationDto = new OperationDTO();
        $operationDto->setCustomer($dto);
        $operationDto->setAuthentificationCode($authCode);
        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operationDto, '', [], true, $addDeviceUUID);

        $this->helper->checkAuthorizationCode($dto, $authCode, $operationName, $addDeviceUUID);
    }
}
