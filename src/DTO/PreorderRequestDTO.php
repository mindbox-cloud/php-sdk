<?php


namespace Mindbox\DTO;

/**
 * Class PreorderRequestDTO
 *
 * @package Mindbox\DTO
 * @property string $calculationDateTimeUtc
 **/
class PreorderRequestDTO extends OrderRequestDTO
{
    /**
     * @return string
     */
    public function getCalculationDateTimeUtc()
    {
        return $this->getField('calculationDateTimeUtc');
    }

    /**
     * @param mixed $calculationDateTimeUtc
     */
    public function setCalculationDateTimeUtc($calculationDateTimeUtc)
    {
        $this->setField('calculationDateTimeUtc', $calculationDateTimeUtc);
    }
}
