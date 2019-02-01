<?php


namespace Mindbox\DTO;

/**
 * @property SkuResponseDTO             sku
 * @property CategoryResponseCollection categories
 **/
class ProductResponseDTO extends ProductIdentityResponseDTO
{
    use ProductDTO, CustomFieldDTO;

    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'sku'        => SkuResponseDTO::class,
        'categories' => CategoryResponseCollection::class,
    ];

    /**
     * @return SkuResponseDTO
     */
    public function getSku()
    {
        return $this->getField('sku');
    }

    /**
     * @return CategoryResponseCollection
     */
    public function getCategories()
    {
        return $this->getField('categories');
    }
}
