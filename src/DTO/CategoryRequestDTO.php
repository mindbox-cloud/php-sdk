<?php


namespace Mindbox\DTO;

/**
 * Class CategoryRequestDTO
 *
 * @package Mindbox\DTO
 * @property array $ids
 */
class CategoryRequestDTO extends DTO
{
    use IdentityRequestDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'category';
}
