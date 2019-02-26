<?php


namespace Mindbox\DTO;

/**
 * Class CategoryResponseDTO
 *
 * @package Mindbox\DTO
 * @property array $ids
 */
class CategoryResponseDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'category';
}
