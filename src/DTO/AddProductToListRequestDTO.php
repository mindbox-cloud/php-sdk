<?php


namespace Mindbox\DTO;

/**
 * Class AddProductToListRequestDTO
 *
 * @package Mindbox\DTO
 * @property ProductRequestDTO $product
 **/
class AddProductToListRequestDTO extends DTO
{
    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'addProductToList';

    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
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
