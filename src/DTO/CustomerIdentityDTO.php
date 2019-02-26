<?php


namespace Mindbox\DTO;

/**
 * Class CustomerIdentityDTO
 *
 * @package Mindbox\DTO
 * @property array $ids
 */
abstract class CustomerIdentityDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'customer';
}
