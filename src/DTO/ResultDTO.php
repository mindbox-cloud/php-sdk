<?php


namespace Mindbox\DTO;

/**
 * @property string                                 status
 * @property ValidationMessageResponseCollection    validationMessages
 * @property CustomerResponseDTO                    customer
 * @property SmsConfirmationResponseDTO             smsConfirmation
 * @property MergeCustomersResponseDTO              mergedCustomers
 * @property OrderResponseCollection                orders
 * @property CustomerActionResponseCollection       customerActions
 * @property CustomerSegmentationResponseCollection customerSegmentations
 * @property ProductListItemResponseCollection      productList
 * @property BalanceResponseCollection              balances
 * @property string                                 totalCount
 **/
class ResultDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'validationMessages'    => ValidationMessageResponseCollection::class,
        'customer'              => CustomerResponseDTO::class,
        'smsConfirmation'       => SmsConfirmationResponseDTO::class,
        'mergedCustomers'       => MergeCustomersResponseDTO::class,
        'orders'                => OrderResponseCollection::class,
        'customerActions'       => CustomerActionResponseCollection::class,
        'customerSegmentations' => CustomerSegmentationResponseCollection::class,
        'productList'           => ProductListItemResponseCollection::class,
        'balances'              => BalanceResponseCollection::class,
        'order'                 => OrderResponseDTO::class,
    ];

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'result';

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getField('status');
    }

    /**
     * @return ValidationMessageResponseCollection
     */
    public function getValidationMessages()
    {
        return $this->getField('validationMessages');
    }

    /**
     * @return CustomerResponseDTO
     */
    public function getCustomer()
    {
        return $this->getField('customer');
    }

    /**
     * @return SmsConfirmationResponseDTO
     */
    public function getSmsConfirmation()
    {
        return $this->getField('smsConfirmation');
    }

    /**
     * @return MergeCustomersResponseDTO
     */
    public function getMergedCustomers()
    {
        return $this->getField('mergedCustomers');
    }

    /**
     * @return OrderResponseCollection
     */
    public function getOrders()
    {
        return $this->getField('orders');
    }

    /**
     * @return CustomerActionResponseCollection
     */
    public function getCustomerActions()
    {
        return $this->getField('customerActions');
    }

    /**
     * @return CustomerSegmentationResponseCollection
     */
    public function getCustomerSegmentations()
    {
        return $this->getField('customerSegmentations');
    }

    /**
     * @return ProductListItemResponseCollection
     */
    public function getProductList()
    {
        return $this->getField('productList');
    }

    /**
     * @return BalanceResponseCollection
     */
    public function getBalances()
    {
        return $this->getField('balances');
    }

    /**
     * @return string
     */
    public function getTotalCount()
    {
        return $this->getField('totalCount');
    }
}
