<?php


namespace Mindbox\DTO;

/**
 * Class PointOfContactResponseDTO
 *
 * @package Mindbox\DTO
 * @property array $ids
 **/
class PointOfContactResponseDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'pointOfContact';
}
