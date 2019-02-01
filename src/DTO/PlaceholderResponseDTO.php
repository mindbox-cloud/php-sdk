<?php


namespace Mindbox\DTO;

/**
 * @property string                        id
 * @property ContentItemResponseCollection content
 **/
class PlaceholderResponseDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'content' => ContentItemResponseCollection::class,
    ];

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'placeHolder';

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getField('id');
    }

    /**
     * @return ContentItemResponseCollection
     */
    public function getContent()
    {
        return $this->getField('content');
    }
}
