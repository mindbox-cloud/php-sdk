<?php


namespace Mindbox\DTO;

/**
 * Class ContentItemPossibleDiscountsResponseDTO
 *
 * @package Mindbox\DTO
 * @property PossibleDiscountsValueResponseDTO $value
 **/
class ContentItemPossibleDiscountsResponseDTO extends ContentItemResponseDTO
{
    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
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
