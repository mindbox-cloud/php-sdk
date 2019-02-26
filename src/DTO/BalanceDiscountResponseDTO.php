<?php


namespace Mindbox\DTO;

/**
 * Class BalanceDiscountResponseDTO
 *
 * @package Mindbox\DTO
 * @property BalanceTypeResponseDTO $balanceType
 * @property string                 $total
 * @property string                 $available
 * @property string                 $blocked
 **/
class BalanceDiscountResponseDTO extends DTO
{
    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
     */
    protected static $DTOMap = [
        'balanceType' => BalanceTypeResponseDTO::class,
    ];

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'balance';

    /**
     * @return BalanceTypeResponseDTO
     */
    public function getBalanceType()
    {
        return $this->getField('balanceType');
    }

    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->getField('total');
    }

    /**
     * @return string
     */
    public function getAvailable()
    {
        return $this->getField('available');
    }

    /**
     * @return string
     */
    public function getBlocked()
    {
        return $this->getField('blocked');
    }
}
