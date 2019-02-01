<?php


namespace Mindbox\DTO;

/**
 * @property string type
 * @property string promoActionId
 * @property string value
 **/
class ContentItemResponseDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'contentItem';

    /**
     * @return string
     */
    public function getType()
    {
        return $this->getField('type');
    }

    /**
     * @return string
     */
    public function getPromoActionId()
    {
        return $this->getField('promoActionId');
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->getField('value');
    }
}
