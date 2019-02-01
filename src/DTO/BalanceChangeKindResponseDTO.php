<?php


namespace Mindbox\DTO;

/**
 * @property string systemName
 */
class BalanceChangeKindResponseDTO extends DTO
{
    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'balanceChangeKind';

    /**
     * @return string
     */
    public function getSystemName()
    {
        return $this->getField('systemName');
    }
}
