<?php

namespace Mindbox\DTO\V3\Requests;

/**
 * Class PaymentRequestCollection
 *
 * @package Mindbox\DTO\V3\Requests
 */
class PaymentRequestCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = PaymentRequestDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'payments';
}