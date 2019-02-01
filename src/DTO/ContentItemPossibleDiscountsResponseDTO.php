<?php


namespace Mindbox\DTO;

/**
 * @property PossibleDiscountsValueResponseDTO value
 **/
class ContentItemPossibleDiscountsResponseDTO extends ContentItemResponseDTO
{
    /**
     * @var array Map of object`s fields.
     */
    protected static $DTOMap = [
        'value' => PossibleDiscountsValueResponseDTO::class,
    ];

    /**
     * @return PossibleDiscountsValueResponseDTO
     */
    public function getValue()
    {
        return $this->getField('value');
    }
}
