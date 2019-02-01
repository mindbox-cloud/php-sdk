<?php


namespace Mindbox\DTO;

/**
 * @property string                 type
 * @property string                 id
 * @property string                 amount
 * @property PromoActionResponseDTO promoAction
 * @property BalanceTypeResponseDTO balanceType
 */
class AppliedDiscountResponseDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'appliedDiscount';

    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'promoAction' => PromoActionResponseDTO::class,
        'balanceType' => BalanceTypeResponseDTO::class,
    ];

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
    public function getId()
    {
        return $this->getField('id');
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->getField('amount');
    }

    /**
     * @return PromoActionResponseDTO
     */
    public function getPromoAction()
    {
        return $this->getField('promoAction');
    }

    /**
     * @return BalanceTypeResponseDTO
     */
    public function getBalanceType()
    {
        return $this->getField('balanceType');
    }
}
