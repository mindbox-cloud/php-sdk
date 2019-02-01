<?php


namespace Mindbox\DTO;

/**
 * @property DiscountCardTypeResponseDTO type
 * @property array                       ids
 * @property string                      status
 **/
class DiscountCardResponseDTO extends DTO
{
    use IdentityDTO;
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'type' => DiscountCardTypeResponseDTO::class,
    ];

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'discountCard';

    /**
     * @return DiscountCardTypeResponseDTO
     */
    public function getType()
    {
        return $this->getField('type');
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getField('status');
    }
}
