<?php


namespace Mindbox\DTO;

/**
 * @property string $name
 */
class BalanceTypeResponseDTO extends BalanceTypeDTO
{
    /**
     * @return string
     */
    public function getName()
    {
        return $this->getField('name');
    }
}
