<?php


namespace Mindbox\DTO;

/**
 * @property array ids
 **/
class PointOfContactResponseDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'pointOfContact';
}
