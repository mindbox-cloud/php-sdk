<?php


namespace Mindbox\DTO;

/**
 * Class CustomerIdentityResponseDTO
 *
 * @package Mindbox\DTO
 * @property string $processingStatus
 */
class CustomerIdentityResponseDTO extends CustomerIdentityDTO
{
    /**
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->getField('processingStatus');
    }
}
