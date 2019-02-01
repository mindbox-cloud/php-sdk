<?php


namespace Mindbox\DTO;

/**
 * @property PromoCodeResponseDTO promoCode
 **/
class DiscountInfoPromoCodeResponseDTO extends DiscountInfoResponseDTO
{
    /**
     * @var array Maps object key names to DTO types.
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
