<?php


namespace Mindbox\DTO;

/**
 * Class PaymentRequestCollection
 *
 * @package Mindbox\DTO
 */
class PaymentRequestCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = PaymentRequestDTO::class;
}
