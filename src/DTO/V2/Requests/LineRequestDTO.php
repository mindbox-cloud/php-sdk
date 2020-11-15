<?php


namespace Mindbox\DTO\V2\Requests;

use Mindbox\DTO\V2\LineDTO;

/**
 * Class LineRequestDTO
 *
 * @package Mindbox\DTO\V2\Requests
 * @property GiftCardRequestDTO        $giftCard
 * @property DiscountRequestCollection $discounts
 **/
class LineRequestDTO extends LineDTO
{
    use CustomFieldRequestDTO;
    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
     */
    protected static $DTOMap = [
        'giftCard'  => GiftCardRequestDTO::class,
        'discounts' => DiscountRequestCollection::class,
    ];

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->setField('quantity', $quantity);
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->setField('status', $status);
    }


    /**
     * @param array|ProductRequestDTO $product
     */
    public function setProduct($product)
    {
        $this->setField('product', $product);
    }

    /**
     * @return GiftCardRequestDTO
     */
    public function getGiftCard()
    {
        return $this->getField('giftCard');
    }

    /**
     * @param array|GiftCardRequestDTO $giftCard
     */
    public function setGiftCard($giftCard)
    {
        $this->setField('giftCard', $giftCard);
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
     * @return ProductRequestDTO
     */
    public function getProduct()
    {
        return $this->getField('product');
    }
}
