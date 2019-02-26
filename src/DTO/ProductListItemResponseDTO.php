<?php


namespace Mindbox\DTO;

/**
 * Class ProductListItemResponseDTO
 *
 * @package Mindbox\DTO
 * @property ProductResponseDTO $product
 **/
class ProductListItemResponseDTO extends ProductListItemDTO
{
    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
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
