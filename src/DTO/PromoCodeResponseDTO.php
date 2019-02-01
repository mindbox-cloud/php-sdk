<?php


namespace Mindbox\DTO;

/**
 * @property string                   id
 * @property string                   status
 * @property PromoCodeTypeResponseDTO type
 * @property string                   availableFromDateTimeUtc
 * @property string                   availableTillDateTimeUtc
 * @property string                   usedDateTimeUtc
 **/
class PromoCodeResponseDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'type' => PromoCodeTypeResponseDTO::class,
    ];

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'promoCode';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getField('id');
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->getField('status');
    }

    /**
     * @return PromoCodeTypeResponseDTO
     */
    public function getType()
    {
        return $this->getField('type');
    }

    /**
     * @return string
     */
    public function getAvailableFromDateTimeUtc()
    {
        return $this->getField('availableFromDateTimeUtc');
    }

    /**
     * @return string
     */
    public function getAvailableTillDateTimeUtc()
    {
        return $this->getField('availableTillDateTimeUtc');
    }

    /**
     * @return string
     */
    public function getUsedDateTimeUtc()
    {
        return $this->getField('usedDateTimeUtc');
    }
}
