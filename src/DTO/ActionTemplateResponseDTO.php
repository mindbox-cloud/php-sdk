<?php


namespace Mindbox\DTO;

/**
 * @property string systemName
 * @property string name
 **/
class ActionTemplateResponseDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $name = 'actionTemplate';

    /**
     * @return string
     */
    public function getSystemName()
    {
        return $this->getField('systemName');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getField('name');
    }
}
