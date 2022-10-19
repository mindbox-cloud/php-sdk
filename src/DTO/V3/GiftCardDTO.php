<?php

namespace Mindbox\DTO\V3;

use Mindbox\DTO\DTO;

class GiftCardDTO extends DTO
{
    /**
     * @var string Название элемента для корректной генерации xml.
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