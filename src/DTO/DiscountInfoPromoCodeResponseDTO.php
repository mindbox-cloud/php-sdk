<?php


namespace Mindbox\DTO;

/**
 * Class DiscountInfoPromoCodeResponseDTO
 *
 * @package Mindbox\DTO
 * @property PromoCodeResponseDTO $promoCode
 **/
class DiscountInfoPromoCodeResponseDTO extends DiscountInfoResponseDTO
{
    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
     */
    protected static $DTOMap = [
        'promoCode' => PromoCodeResponseDTO::class,
    ];

    /**
     * @return PromoCodeResponseDTO
     */
    public function getPromoCode()
    {
        return $this->getField('promoCode');
    }
}
