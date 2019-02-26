<?php


namespace Mindbox\DTO;

/**
 * Class MergeCustomersResponseDTO
 *
 * @package Mindbox\DTO
 * @property CustomerIdentityResponseCollection $customersToMerge
 * @property CustomerIdentityResponseDTO        $resultingCustomer
 **/
class MergeCustomersResponseDTO extends DTO
{
    /**
     * @var array Мэппинг преобразрования полей в объекты DTO.
     */
    protected static $DTOMap = [
        'customersToMerge'  => CustomerIdentityResponseCollection::class,
        'resultingCustomer' => CustomerIdentityResponseDTO::class,
    ];

    /**
     * @var string Название элемента для корректной генерации xml.
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
