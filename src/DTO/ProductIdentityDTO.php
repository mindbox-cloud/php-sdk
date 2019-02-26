<?php


namespace Mindbox\DTO;

/**
 * Class ProductIdentityDTO
 *
 * @package Mindbox\DTO
 * @property array $ids
 **/
abstract class ProductIdentityDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'product';
}
