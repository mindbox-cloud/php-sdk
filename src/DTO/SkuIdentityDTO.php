<?php


namespace Mindbox\DTO;

/**
 * Class SkuIdentityDTO
 *
 * @package Mindbox\DTO
 * @property array $ids
 **/
abstract class SkuIdentityDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'sku';
}
