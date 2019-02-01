<?php


namespace Mindbox\DTO;

/**
 * Class PossibleDiscountsValueItemResponseDTO
 *
 * @package Mindbox\DTO
 * @property SkuResponseDTO sku
 */
class PossibleDiscountsValueItemResponseDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'sku' => SkuResponseDTO::class,
    ];

    /**
     * @var string DTO name.
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
