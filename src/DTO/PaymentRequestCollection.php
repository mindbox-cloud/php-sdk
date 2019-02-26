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
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = PaymentRequestDTO::class;
}
