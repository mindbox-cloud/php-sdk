<?php


namespace Mindbox\DTO;

/**
 * @property array  ids
 * @property string name
 **/
class SegmentResponseDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name for Xml.
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
