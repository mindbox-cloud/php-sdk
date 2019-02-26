<?php


namespace Mindbox\DTO;

/**
 * Class AreaDTO
 *
 * @package Mindbox\DTO
 * @property array  $ids
 * @property string $name
 */
abstract class AreaDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string Название элемента для корректной генерации xml.
     */
    protected static $xmlName = 'area';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getField('name');
    }
}
