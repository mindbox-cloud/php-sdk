<?php


namespace Mindbox\DTO\V3\Requests;

/**
 * Class PreorderRequestDTO
 *
 * @package Mindbox\DTO\V3\Requests
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
