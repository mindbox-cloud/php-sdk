<?php


namespace Mindbox\DTO;

/**
 **/
class SkuRequestDTO extends SkuIdentityRequestDTO
{
    use SkuDTO;

    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->setField('productId', $productId);
    }

    /**
     * @param mixed $basePricePerItem
     */
    public function setBasePricePerItem($basePricePerItem)
    {
        $this->setField('basePricePerItem', $basePricePerItem);
    }

    /**
     * @param mixed $skuId
     */
    public function setSkuId($skuId)
    {
        $this->setField('skuId', $skuId);
    }
}
