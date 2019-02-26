<?php


namespace Mindbox\DTO;

/**
 * Class DiscountCardIdentityRequestDTO
 *
 * @package Mindbox\DTO
 * @property array $ids
 **/
class DiscountCardIdentityRequestDTO extends DTO
{
    use IdentityRequestDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'discountCard';
}
