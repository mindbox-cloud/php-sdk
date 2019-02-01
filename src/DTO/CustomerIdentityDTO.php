<?php


namespace Mindbox\DTO;

/**
 * Class MergeCustomersRequestDTO
 *
 * @package Mindbox\DTO
 * @property array ids
 */
abstract class CustomerIdentityDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'customer';
}
