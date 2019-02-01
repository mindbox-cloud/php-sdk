<?php


namespace Mindbox\DTO;

/**
 * @property array  ids
 * @property string name
 **/
class SegmentationResponseDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name for Xml.
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
