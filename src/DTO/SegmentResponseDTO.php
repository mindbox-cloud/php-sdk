<?php


namespace Mindbox\DTO;

/**
 * Class SegmentResponseDTO
 *
 * @package Mindbox\DTO
 * @property array  $ids
 * @property string $name
 **/
class SegmentResponseDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'segment';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getField('name');
    }
}
