<?php


namespace Mindbox\DTO;

/**
 * @property string              type
 * @property string              availableAmountForCurrentOrder
 * @property GiftCardResponseDTO giftCard
 **/
class PaymentInfoResponseDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'giftCard' => GiftCardResponseDTO::class,
    ];

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'paymentInfo';

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getField('type');
    }

    /**
     * @return string
     */
    public function getAvailableAmountForCurrentOrder()
    {
        return $this->getField('availableAmountForCurrentOrder');
    }

    /**
     * @return GiftCardResponseDTO
     */
    public function getGiftCard()
    {
        return $this->getField('giftCard');
    }
}
