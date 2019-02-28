<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\ResultDTO;

/**
 * Class ResultDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class ResultDTOTest extends DTOTest
{
    /**
     * @var ResultDTO $resultDto
     */
    public $resultDto;

    /**
     * @var string
     */
    protected $dtoClassName = ResultDTO::class;

    /**
     *
     */
    public function asJsonFieldsProvider()
    {
        return [
            [
                [
                    'orders' => [
                        [
                            'ids'                          => [
                                'mindbox'       => '189',
                                'transactionId' => '0000001282018244543',
                            ],
                            'createdPointOfContact'        => '244543',
                            'createdDateTimeUtc'           => '2018-09-28 10:35:57',
                            'lines'                        => [
                                [
                                    'quantity'                     => '1',
                                    'discountedPrice'              => '45',
                                    ResultDTO::XML_ITEM_NAME_INDEX => 'line',
                                ],
                                [
                                    'quantity'                     => '2',
                                    'discountedPrice'              => '145',
                                    ResultDTO::XML_ITEM_NAME_INDEX => 'line',
                                ],
                            ],
                            ResultDTO::XML_ITEM_NAME_INDEX => 'order',
                        ],
                        [
                            'ids'                          => [
                                'mindbox'       => '188',
                                'transactionId' => '0000001272018244543',
                            ],
                            'createdPointOfContact'        => '244543',
                            'createdDateTimeUtc'           => '2018-09-28 10:34:12',
                            ResultDTO::XML_ITEM_NAME_INDEX => 'order',
                        ],
                    ],
                ],
                '{"orders":[{"ids":{"mindbox":"189","transactionId":"0000001282018244543"},"createdPointOfContact":"244543","createdDateTimeUtc":"2018-09-28 10:35:57","lines":[{"quantity":"1","discountedPrice":"45"},{"quantity":"2","discountedPrice":"145"}]},{"ids":{"mindbox":"188","transactionId":"0000001272018244543"},"createdPointOfContact":"244543","createdDateTimeUtc":"2018-09-28 10:34:12"}]}',
            ],
        ];
    }

    public function setUp()
    {
        $data            = [
            'status'                => 'some_status',
            'validationMessages'    => [
                'validationMessage' => [
                    'message'  => 'some_message',
                    'location' => 'some_location',
                ],
            ],
            'customer'              => ['email' => 'some_email',],
            'smsConfirmation'       => ['someField' => 'some_field',],
            'customersToMerge'      => [['someField' => 'some_field',]],
            'resultingCustomer'     => ['someField' => 'some_field',],
            'orders'                => [['someField' => 'some_field',]],
            'customerActions'       => [['someField' => 'some_field',]],
            'customerSegmentations' => [['someField' => 'some_field',]],
            'productList'           => [['someField' => 'some_field',]],
            'balances'              => [['someField' => 'some_field',]],
            'totalCount'            => 'some_totalCount',
        ];
        $this->resultDto = new ResultDTO($data);
    }

    public function testGetStatus()
    {
        $status = $this->resultDto->getStatus();

        $this->assertSame('some_status', $status);
    }

    public function testGetValidationMessages()
    {
        $messages = $this->resultDto->getValidationMessages();

        $this->assertInstanceOf(\Mindbox\DTO\ValidationMessageResponseCollection::class, $messages);
    }

    public function testGetCustomer()
    {
        $customer = $this->resultDto->getCustomer();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerResponseDTO::class, $customer);
    }

    public function testGetSmsConfirmation()
    {
        $smsConfirmation = $this->resultDto->getSmsConfirmation();

        $this->assertInstanceOf(\Mindbox\DTO\SmsConfirmationResponseDTO::class, $smsConfirmation);
    }

    public function testGetCustomersToMerge()
    {
        $customersToMerge = $this->resultDto->getCustomersToMerge();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerIdentityResponseCollection::class, $customersToMerge);
    }

    public function testGetResultingCustomer()
    {
        $customersToMerge = $this->resultDto->getResultingCustomer();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerIdentityResponseDTO::class, $customersToMerge);
    }

    public function testGetOrders()
    {
        $orders = $this->resultDto->getOrders();

        $this->assertInstanceOf(\Mindbox\DTO\OrderResponseCollection::class, $orders);
    }

    public function testGetCustomerActions()
    {
        $actions = $this->resultDto->getCustomerActions();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerActionResponseCollection::class, $actions);
    }

    public function testGetCustomerSegmentations()
    {
        $segmentations = $this->resultDto->getCustomerSegmentations();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerSegmentationResponseCollection::class, $segmentations);
    }

    public function testGetProductList()
    {
        $segmentations = $this->resultDto->getProductList();

        $this->assertInstanceOf(\Mindbox\DTO\ProductListItemResponseCollection::class, $segmentations);
    }

    public function testGetBalances()
    {
        $segmentations = $this->resultDto->getBalances();

        $this->assertInstanceOf(\Mindbox\DTO\BalanceResponseCollection::class, $segmentations);
    }

    public function testGetTotalCount()
    {
        $totalCount = $this->resultDto->getTotalCount();

        $this->assertSame('some_totalCount', $totalCount);
    }
}
