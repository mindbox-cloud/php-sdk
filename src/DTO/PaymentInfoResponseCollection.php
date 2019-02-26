<?php


namespace Mindbox\DTO;

/**
 * Class PaymentInfoResponseCollection
 *
 * @package Mindbox\DTO
 */
class PaymentInfoResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = PaymentInfoResponseDTO::class;
}
