<?php


namespace Mindbox\DTO;

/**
 * @property CustomerRequestV2DTO      customer
 * @property DiscountRequestCollection discounts
 * @property string                    deliveryCost
 * @property array                     customFields
 * @property LineRequestCollection     lines
 * @property PaymentRequestCollection  payments
 **/
class OrderRequestDTO extends OrderDTO
{
    use IdentityRequestDTO, CustomFieldRequestDTO;
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'customer'  => CustomerRequestV2DTO::class,
        'discounts' => DiscountRequestCollection::class,
        'lines'     => LineRequestCollection::class,
        'payments'  => PaymentRequestCollection::class,
    ];

    /**
     * @param mixed $pointOfContact
     */
    public function setPointOfContact($pointOfContact)
    {
        $this->setField('pointOfContact', $pointOfContact);
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->setField('area', $area);
    }

    /**
     * @return LineRequestCollection
     */
    public function getLines()
    {
        return $this->getField('lines');
    }

    /**
     * @param array|LineRequestCollection $lines
     */
    public function setLines($lines)
    {
        $this->setField('lines', $lines);
    }

    /**
     * @return PaymentRequestCollection
     */
    public function getPayments()
    {
        return $this->getField('payments');
    }

    /**
     * @param array|PaymentRequestCollection $payments
     */
    public function setPayments($payments)
    {
        $this->setField('payments', $payments);
    }

    /**
     * @return CustomerRequestV2DTO
     */
    public function getCustomer()
    {
        return $this->getField('customer');
    }

    /**
     * @param array|CustomerRequestV2DTO $customer
     */
    public function setCustomer($customer)
    {
        $this->setField('customer', $customer);
    }

    /**
     * @return DiscountRequestCollection
     */
    public function getDiscounts()
    {
        return $this->getField('discounts');
    }

    /**
     * @param array|DiscountRequestCollection $discounts
     */
    public function setDiscounts($discounts)
    {
        $this->setField('discounts', $discounts);
    }

    /**
     * @return string
     */
    public function getDeliveryCost()
    {
        return $this->getField('deliveryCost');
    }

    /**
     * @param mixed $deliveryCost
     */
    public function setDeliveryCost($deliveryCost)
    {
        $this->setField('deliveryCost', $deliveryCost);
    }
}
