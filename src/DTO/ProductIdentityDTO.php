<?php


namespace Mindbox\DTO;

/**
 * @property array ids
 **/
abstract class ProductIdentityDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'product';
}
