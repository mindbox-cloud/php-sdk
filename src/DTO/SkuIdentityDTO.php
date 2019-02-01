<?php


namespace Mindbox\DTO;

/**
 * @property array ids
 **/
abstract class SkuIdentityDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'sku';
}
