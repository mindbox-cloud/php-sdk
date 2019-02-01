<?php


namespace Mindbox\DTO;

/**
 * Class CategoryResponseDTO
 *
 * @package Mindbox\DTO
 * @property array ids
 */
class CategoryResponseDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'category';
}
