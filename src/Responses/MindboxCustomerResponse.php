<?php

namespace Mindbox\Responses;

use Mindbox\DTO\CustomerResponseDTO;
use Mindbox\MindboxResponse;

/**
 * Класс, расширяющий стандартный класс ответа от Mindbox и используемый в стандартных запросах на получение данных
 * потребителя.
 * Class MindboxCustomerResponse
 *
 * @package Mindbox
 */
class MindboxCustomerResponse extends MindboxResponse
{
    /**
     * Возвращает объект потребителя, если такой есть в ответе.
     *
     * @return CustomerResponseDTO|null
     */
    public function getCustomer()
    {
        return $this->getResult()->getCustomer();
    }
}
