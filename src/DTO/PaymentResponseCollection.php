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
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = PaymentResponseDTO::class;
}
