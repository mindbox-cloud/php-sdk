<?php


namespace Mindbox\DTO;

/**
 * @property string id
 **/
class DiscountCardTypeResponseDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'type';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getField('id');
    }
}
