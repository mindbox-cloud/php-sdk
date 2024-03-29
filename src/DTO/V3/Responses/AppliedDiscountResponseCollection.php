<?php


namespace Mindbox\DTO\V3\Responses;

use Mindbox\DTO\DTOCollection;

/**
 * Class AppliedDiscountResponseCollection
 *
 * @package Mindbox\DTO\V3\Responses
 */
class AppliedDiscountResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = AppliedDiscountResponseDTO::class;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'appliedDiscounts';
}
