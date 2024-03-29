<?php

namespace Mindbox\DTO\V3\Requests;

use Mindbox\DTO\DTOCollection;

/**
 * Class PaymentRequestCollection
 *
 * @package Mindbox\DTO\V3\Requests
 */
class PaymentRequestCollection extends DTOCollection
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
