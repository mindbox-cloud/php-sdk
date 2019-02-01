<?php


namespace Mindbox\DTO;

/**
 * Class CategoryRequestDTO
 *
 * @package Mindbox\DTO
 * @property array ids
 */
class CategoryRequestDTO extends DTO
{
    use IdentityRequestDTO;

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'category';
}
