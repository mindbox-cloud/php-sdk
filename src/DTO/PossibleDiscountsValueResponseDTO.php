<?php


namespace Mindbox\DTO;

/**
 * Class PossibleDiscountsValueResponseDTO
 *
 * @package Mindbox\DTO
 * @property PossibleDiscountsValueDiscountResponseDTO    discount
 * @property string                                       itemsCount
 * @property PossibleDiscountsValueItemResponseCollection items
 */
class PossibleDiscountsValueResponseDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'discount' => PossibleDiscountsValueDiscountResponseDTO::class,
        'items'    => PossibleDiscountsValueItemResponseCollection::class,
    ];

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'value';

    /**
     * @return PossibleDiscountsValueDiscountResponseDTO
     */
    public function getDiscount()
    {
        return $this->getField('discount');
    }

    /**
     * @return string
     */
    public function getItemsCount()
    {
        return $this->getField('itemsCount');
    }

    /**
     * @return PossibleDiscountsValueItemResponseCollection
     */
    public function getItems()
    {
        return $this->getField('items');
    }
}
