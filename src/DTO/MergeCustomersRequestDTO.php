<?php


namespace Mindbox\DTO;

/**
 * @property CustomerIdentityRequestCollection customersToMerge
 * @property CustomerIdentityRequestDTO        resultingCustomer
 **/
class MergeCustomersRequestDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'customersToMerge'  => CustomerIdentityRequestCollection::class,
        'resultingCustomer' => CustomerIdentityRequestDTO::class,
    ];

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'operation';

    /**
     * @return CustomerIdentityRequestCollection
     */
    public function getCustomersToMerge()
    {
        return $this->getField('customersToMerge');
    }

    /**
     * @param array|CustomerIdentityRequestCollection $customersToMerge
     */
    public function setCustomersToMerge($customersToMerge)
    {
        $this->setField('customersToMerge', $customersToMerge);
    }

    /**
     * @return CustomerIdentityRequestDTO
     */
    public function getResultingCustomer()
    {
        return $this->getField('resultingCustomer');
    }

    /**
     * @param array|CustomerIdentityRequestDTO $resultingCustomer
     */
    public function setResultingCustomer($resultingCustomer)
    {
        $this->setField('resultingCustomer', $resultingCustomer);
    }
}
