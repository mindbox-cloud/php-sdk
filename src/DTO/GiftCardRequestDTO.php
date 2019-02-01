<?php


namespace Mindbox\DTO;

/**
 **/
class GiftCardRequestDTO extends GiftCardDTO
{
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->setField('id', $id);
    }

    /**
     * @param mixed $getFromPool
     */
    public function setGetFromPool($getFromPool)
    {
        $this->setField('getFromPool', $getFromPool);
    }
}
