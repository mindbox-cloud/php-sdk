<?php


namespace Mindbox\DTO;

/**
 * Class SegmentationResponseDTO
 *
 * @package Mindbox\DTO
 * @property array  $ids
 * @property string $name
 **/
class SegmentationResponseDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'segmentation';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getField('name');
    }
}
