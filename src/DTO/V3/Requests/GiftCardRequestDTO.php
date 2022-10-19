<?php

namespace Mindbox\DTO\V3\Requests;

use Mindbox\DTO\V3\GiftCardDTO;

/**
 * Class GiftCardRequestDTO
 *
 * @package Mindbox\DTO\V3\Requests
 */
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
