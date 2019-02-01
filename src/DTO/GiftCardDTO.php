<?php


namespace Mindbox\DTO;

/**
 * @property string id
 * @property string getFromPool
 **/
abstract class GiftCardDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'giftCard';

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
    public function getGetFromPool()
    {
        return $this->getField('getFromPool');
    }
}
