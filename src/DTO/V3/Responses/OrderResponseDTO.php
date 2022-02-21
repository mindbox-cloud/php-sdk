<?php


namespace Mindbox\DTO\V3\Responses;

use Mindbox\DTO\V3\OrderDTO;

/**
 * Class OrderResponseDTO
 *
 * @package Mindbox\DTO\V3\Responses
 * @property string                            $discountedTotalPrice
 * @property AppliedDiscountResponseCollection $appliedDiscounts
 * @property string                            $totalAcquiredBalanceChange
 * @property string                            $createdPointOfContact
 * @property PlaceholderResponseCollection     $placeHolders
 * @property DiscountInfoResponseCollection    $discountsInfo
 * @property PaymentInfoResponseCollection     $paymentsInfo
 * @property string                            $createdDateTimeUtc
 * @property CustomerResponseDTO               $customer
 * @property LineResponseCollection            $lines
 * @property PaymentResponseCollection         $payments
 **/
class OrderResponseDTO extends OrderDTO
{
    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
     */
    protected static $DTOMap = [
        'appliedDiscounts' => AppliedDiscountResponseCollection::class,
        'placeHolders'     => PlaceholderResponseCollection::class,
        'discountsInfo'    => DiscountInfoResponseCollection::class,
        'paymentsInfo'     => PaymentInfoResponseCollection::class,
        'customer'         => CustomerResponseDTO::class,
        'lines'            => LineResponseCollection::class,
        'payments'         => PaymentResponseCollection::class,
    ];

    /**
     * @return string
     */
    public function getIsCurrentState()
    {
        return $this->getField('isCurrentState');
    }

    /**
     * @return string
     */
    public function getDiscountedTotalPrice()
    {
        return $this->getField('discountedTotalPrice');
    }

    /**
     * @return AppliedDiscountResponseCollection
     */
    public function getAppliedDiscounts()
    {
        return $this->getField('appliedDiscounts');
    }

    /**
     * @return AppliedPromotionResponseCollection
     */
    public function getAppliedPromotions()
    {
        return $this->getField('appliedPromotions');
    }

    /**
     * @return string
     */
    public function getTotalAcquiredBalanceChange()
    {
        return $this->getField('totalAcquiredBalanceChange');
    }

    /**
     * @return string
     */
    public function getCreatedPointOfContact()
    {
        return $this->getField('createdPointOfContact');
    }

    /**
     * @return PlaceholderResponseCollection
     */
    public function getPlaceholders()
    {
        return $this->getField('placeHolders');
    }

    /**
     * @return DiscountInfoResponseCollection
     */
    public function getDiscountsInfo()
    {
        return $this->getField('discountsInfo');
    }

    /**
     * @return PaymentInfoResponseCollection
     */
    public function getPaymentsInfo()
    {
        return $this->getField('paymentsInfo');
    }

    /**
     * @return string
     */
    public function getCreatedDateTimeUtc()
    {
        return $this->getField('createdDateTimeUtc');
    }

    /**
     * @return CustomerResponseDTO
     */
    public function getCustomer()
    {
        return $this->getField('customer');
    }

    /**
     * @return LineResponseCollection
     */
    public function getLines()
    {
        return $this->getField('lines');
    }

    /**
     * @return PaymentResponseCollection
     */
    public function getPayments()
    {
        return $this->getField('payments');
    }

    /**
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->getField('totalPrice');
    }
}
