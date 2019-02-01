<?php


namespace Mindbox\DTO;

/**
 * Class ProductListItemRequestDTO
 *
 * @property ProductRequestDTO product
 **/
class ProductListItemRequestDTO extends ProductListItemDTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'product' => ProductRequestDTO::class,
    ];

    /**
     * @return ProductRequestDTO
     */
    public function getProduct()
    {
        return $this->getField('product');
    }

    /**
     * @param ProductRequestDTO $product
     */
    public function setProduct($product)
    {
        $this->setField('product', $product);
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->setField('count', $count);
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->setField('price', $price);
    }
}
