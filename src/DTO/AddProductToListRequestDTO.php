<?php


namespace Mindbox\DTO;

/**
 * @property ProductRequestDTO product
 **/
class AddProductToListRequestDTO extends DTO
{
    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'addProductToList';

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
     * @param array|ProductRequestDTO $product
     */
    public function setProduct($product)
    {
        $this->setField('product', $product);
    }
}
