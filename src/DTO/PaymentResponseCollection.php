<?php


namespace Mindbox\DTO;

/**
 * Class PaymentResponseCollection
 *
 * @package Mindbox\DTO
 */
class PaymentResponseCollection extends DTOCollection
{
    /**
     * @var string Map of collections`s fields.
     */
    protected static $collectionItemsName = PaymentResponseDTO::class;
}
