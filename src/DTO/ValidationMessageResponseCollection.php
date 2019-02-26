<?php


namespace Mindbox\DTO;

/**
 * Class ValidationMessageResponseCollection
 *
 * @package Mindbox\DTO
 */
class ValidationMessageResponseCollection extends DTOCollection
{
    /**
     * @var string Название элементов коллекции для корректной генерации xml.
     */
    protected static $collectionItemsName = ValidationMessageResponseDTO::class;
}
