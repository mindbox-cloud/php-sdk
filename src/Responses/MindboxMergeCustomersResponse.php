<?php

namespace Mindbox\Responses;

use Mindbox\DTO\CustomerIdentityResponseCollection;
use Mindbox\DTO\CustomerIdentityResponseDTO;
use Mindbox\MindboxResponse;

/**
 * Класс, расширяющий стандартный класс ответа от Mindbox и используемый в стандартном запросе на объединение
 * потребителей.
 * Class MindboxMergeCustomersResponse
 *
 * @package Mindbox
 */
class MindboxMergeCustomersResponse extends MindboxResponse
{
    /**
     * Возвращает коллекцию объединяемых потребителей, если такие есть в ответе.
     *
     * @return CustomerIdentityResponseCollection|null
     */
    public function getCustomersToMerge()
    {
        return $this->getResult()->getCustomersToMerge();
    }

    /**
     * Возвращает объект результирующего потребителя, если такой есть в ответе.
     *
     * @return CustomerIdentityResponseDTO|null
     */
    public function getResultingCustomer()
    {
        return $this->getResult()->getResultingCustomer();
    }
}
