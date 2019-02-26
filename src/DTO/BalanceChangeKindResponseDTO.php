<?php


namespace Mindbox\DTO;

/**
 * Class BalanceChangeKindResponseDTO
 *
 * @package Mindbox\DTO
 * @property string $systemName
 */
class BalanceChangeKindResponseDTO extends DTO
{
    /**
     * @var string Название элемента для корректной генерации xml.
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
