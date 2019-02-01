<?php


namespace Mindbox\DTO;

/**
 * Class ProductListItemResponseDTO
 *
 * @property ProductResponseDTO product
 **/
class ProductListItemResponseDTO extends ProductListItemDTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'product' => ProductResponseDTO::class,
    ];

    /**
     * @return ProductResponseDTO
     */
    public function getProduct()
    {
        return $this->getField('product');
    }
}
