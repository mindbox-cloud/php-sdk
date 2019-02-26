<?php


namespace Mindbox\DTO;

/**
 * Class PossibleDiscountsValueItemResponseDTO
 *
 * @package Mindbox\DTO
 * @property SkuResponseDTO $sku
 */
class PossibleDiscountsValueItemResponseDTO extends DTO
{
    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
     */
    protected static $DTOMap = [
        'sku' => SkuResponseDTO::class,
    ];

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'item';

    /**
     * @return SkuResponseDTO
     */
    public function getSku()
    {
        return $this->getField('sku');
    }
}
