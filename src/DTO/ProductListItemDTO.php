<?php


namespace Mindbox\DTO;

/**
 * Class ProductListItemDTO
 *
 * @package Mindbox\DTO
 * @property string $count
 * @property string $price
 **/
abstract class ProductListItemDTO extends DTO
{
    /**
     * @var string Название элемента для корректной генерации xml.
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
