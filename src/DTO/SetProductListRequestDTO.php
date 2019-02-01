<?php


namespace Mindbox\DTO;

/**
 * @property ProductListItemRequestCollection products
 **/
class SetProductListRequestDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'products' => ProductListItemRequestCollection::class,
    ];

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'productList';

    /**
     * @return ProductListItemRequestCollection
     */
    public function getProducts()
    {
        return $this->getField('products');
    }

    /**
     * @param array|ProductListItemRequestCollection $products
     */
    public function setProducts($products)
    {
        $this->setField('products', $products);
    }
}
