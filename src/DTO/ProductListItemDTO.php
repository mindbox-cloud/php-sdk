<?php


namespace Mindbox\DTO;

/**
 * @property string count
 * @property string price
 **/
abstract class ProductListItemDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'productListItem';

    /**
     * @return string
     */
    public function getCount()
    {
        return $this->getField('count');
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->getField('price');
    }
}
