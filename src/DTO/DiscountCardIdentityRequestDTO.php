<?php


namespace Mindbox\DTO;

/**
 * @property array ids
 **/
class DiscountCardIdentityRequestDTO extends DTO
{
    use IdentityRequestDTO;

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'discountCard';
}
