<?php


namespace Mindbox\DTO;

/**
 * @property CustomerIdentityResponseCollection customersToMerge
 * @property CustomerIdentityResponseDTO        resultingCustomer
 **/
class MergeCustomersResponseDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'customersToMerge'  => CustomerIdentityResponseCollection::class,
        'resultingCustomer' => CustomerIdentityResponseDTO::class,
    ];

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'result';

    /**
     * @return CustomerIdentityResponseCollection
     */
    public function getCustomersToMerge()
    {
        return $this->getField('customersToMerge');
    }

    /**
     * @return CustomerIdentityResponseDTO
     */
    public function getResultingCustomer()
    {
        return $this->getField('resultingCustomer');
    }
}
