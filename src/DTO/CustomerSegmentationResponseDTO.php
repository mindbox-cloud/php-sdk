<?php


namespace Mindbox\DTO;

/**
 * @property SegmentationResponseDTO segmentation
 * @property SegmentResponseDTO      segment
 **/
class CustomerSegmentationResponseDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'segmentation' => SegmentationResponseDTO::class,
        'segment'      => SegmentResponseDTO::class,
    ];

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'customerSegmentation';

    /**
     * @return SegmentationResponseDTO
     */
    public function getSegmentation()
    {
        return $this->getField('segmentation');
    }

    /**
     * @return SegmentResponseDTO
     */
    public function getSegment()
    {
        return $this->getField('segment');
    }
}
