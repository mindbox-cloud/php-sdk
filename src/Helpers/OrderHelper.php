<?php

namespace Mindbox\Helpers;

use Mindbox\DTO\V2\Requests\OrderCreateRequestDTO;
use Mindbox\DTO\V2\Requests\OrderUpdateRequestDTO;
use Mindbox\DTO\V2\Requests\PreorderRequestDTO;
use Mindbox\Responses\MindboxOrderResponse;
use Mindbox\Responses\MindboxOrdersResponse;

/**
 * Хелпер, являющий обёрткой над универсальным запросом. Содержит методы для отправки запросов, связанных с
 * процессингом заказов.
 * Class OrderHelper
 *
 * @package Mindbox\Helpers
 */
class OrderHelper extends AbstractMindboxHelper
{
    /**
     * Выполняет вызов стандартной операции Website.CalculateCart:
     *
     * @see https://developers.mindbox.ru/docs/preorderxml
     *
     * @param PreorderRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string             $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function calculateCart(PreorderRequestDTO $order, $operationName)
    {
        $this->client->setResponseType(MindboxOrderResponse::class);

        return $this->client->prepareRequest('POST', $operationName, $order, 'get-pre-order-info', [], true, false);
    }

    /**
     * Выполняет вызов стандартной операции Website.CalculateAuthorizedCart:
     *
     * @see https://developers.mindbox.ru/docs/processing-calculate
     *
     * @param PreorderRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string             $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function calculateAuthorizedCart(\Mindbox\DTO\V3\Requests\PreorderRequestDTO $order, $operationName)
    {
        $this->client->setResponseType(MindboxOrderResponse::class);

        return $this->client->prepareRequest('POST', $operationName, $order, 'get-pre-order-info', [], true, true);
    }

    /**
     * Выполняет вызов стандартной операции Website.CalculateUnauthorizedCart
     *
     * @see https://developers.mindbox.ru/docs/processing-calculate
     *
     * @param PreorderRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string             $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function calculateUnauthorizedCart(\Mindbox\DTO\V3\Requests\PreorderRequestDTO $order, $operationName)
    {
        $this->client->setResponseType(MindboxOrderResponse::class);

        return $this->client->prepareRequest('POST', $operationName, $order, 'get-pre-order-info', [], true, true);
    }

    /**
     * Выполняет вызов стандартной операции Website.CreateOrder:
     *
     * @see https://developers.mindbox.ru/docs/xml
     *
     * @param OrderCreateRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string                $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function createOrder(OrderCreateRequestDTO $order, $operationName)
    {
        $this->client->setResponseType(MindboxOrderResponse::class);

        return $this->client->prepareRequest('POST', $operationName, $order, 'create', [], true, false);
    }

    /**
     * Выполняет вызов стандартной операции Website.CreateAuthorizedOrder:
     *
     * @see https://developers.mindbox.ru/docs/xml
     *
     * @param OrderCreateRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string                $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function CreateAuthorizedOrder(OrderCreateRequestDTO $order, $operationName)
    {
        $this->client->setResponseType(MindboxOrderResponse::class);

        return $this->client->prepareRequest('POST', $operationName, $order, 'create', [], false, true);
    }

    /**
     * Выполняет вызов стандартной операции Website.beginUnauthroziedOrderTransaction:
     *
     * @see https://developers.mindbox.ru/docs/xml
     *
     * @param OrderCreateRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string                $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function BeginUnauthorizedOrderTransaction(OrderCreateRequestDTO $order, $operationName)
    {
        $this->client->setResponseType(MindboxOrderResponse::class);

        return $this->client->prepareRequest('POST', $operationName, $order, 'create', [], true, true);
    }

    /**
     * Выполняет вызов стандартной операции Website.beginAuthroziedOrderTransaction:
     *
     * @see https://developers.mindbox.ru/docs/xml
     *
     * @param OrderCreateRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string                $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function BeginAuthorizedOrderTransaction(OrderCreateRequestDTO $order, $operationName)
    {
        $this->client->setResponseType(MindboxOrderResponse::class);

        return $this->client->prepareRequest('POST', $operationName, $order, 'create', [], true, true);
    }

    /**
     * Выполняет вызов стандартной операции Website.SaveOfflineOrder:
     *
     * @see https://developers.mindbox.ru/docs/processing-offline-order
     *
     * @param OrderCreateRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string                $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function SaveOfflineOrder(\Mindbox\DTO\V3\Requests\OrderCreateRequestDTO $order, $operationName)
    {
        $this->client->setResponseType(MindboxOrderResponse::class);

        return $this->client->prepareRequest('POST', $operationName, $order, 'create', [], false, false);
    }

    /**
     * Выполняет вызов стандартной операции Website.createUnauthorizedOrder:
     *
     * @see https://developers.mindbox.ru/docs/xml
     *
     * @param OrderCreateRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string                $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function createUnauthorizedOrder(OrderCreateRequestDTO $order, $operationName)
    {
        $this->client->setResponseType(MindboxOrderResponse::class);

        return $this->client->prepareRequest('POST', $operationName, $order, 'create', [], false, true);
    }


    /**
     * Выполняет вызов стандартной операции Website.CommitOrderTransaction:
     *
     * @see https://developers.mindbox.ru/docs/processing-commit-order-transaction
     *
     * @param OrderCreateRequestDTO $order         Объект, содержащий данные заказа для запроса.
     * @param string                $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function CommitOrderTransaction(OrderCreateRequestDTO $order, $operationName)
    {
        $this->client->setResponseType(MindboxOrderResponse::class);

        return $this->client->prepareRequest('POST', $operationName, $order, 'create', [], false, true);
    }

    /**
     * Выполняет вызов стандартной операции Website.RollbackOrderTransaction:
     *
     * @see https://developers.mindbox.ru/docs/processing-rollback-order-transaction
     *
     * @param OrderCreateRequestDTO $order         Объект, содержащий данные заказа для запроса.
     * @param string                $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function RollbackOrderTransaction(OrderCreateRequestDTO $order, $operationName)
    {
        $this->client->setResponseType(MindboxOrderResponse::class);

        return $this->client->prepareRequest('POST', $operationName, $order, 'create', [], false, true);
    }




    /**
     * Выполняет вызов стандартной операции Website.ConfirmOrder:
     *
     * @see https://developers.mindbox.ru/docs/изменение-заказа
     *
     * @param OrderUpdateRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string                $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function confirmOrder(OrderUpdateRequestDTO $order, $operationName)
    {
        return $this->client->prepareRequest('POST', $operationName, $order, 'update-order', [], true, false);
    }

    /**
     * Выполняет вызов стандартной операции Website.CancelOrder:
     *
     * @see https://developers.mindbox.ru/docs/изменение-заказа
     *
     * @param OrderUpdateRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string                $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function cancelOrder(OrderUpdateRequestDTO $order, $operationName)
    {
        return $this->client->prepareRequest('POST', $operationName, $order, 'update-order', [], true, false);
    }

    /**
     * Выполняет вызов стандартной операции Website.OfflineOrder:
     *
     * @see https://developers.mindbox.ru/docs/изменение-заказа
     *
     * @param OrderUpdateRequestDTO $order         Объект, содержащий данные корзины для запроса.
     * @param string                $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function offlineOrder(OrderUpdateRequestDTO $order, $operationName)
    {
        return $this->client->prepareRequest('POST', $operationName, $order, 'update-order', [], true, false);
    }

    /**
     * Выполняет вызов стандартной операции Website.GetCustomerOrders:
     *
     * @see https://developers.mindbox.ru/docs/получение-списка-заказов-потребителя
     *
     * @param int    $countToReturn Максимальное количество заказов для возврата.
     * @param string $mindbox       Идентификатор потребителя.
     * @param int    $startingIndex Порядковый номер заказа, начиная с которого будет сформирован список заказов.
     * @param string $operationName Название операции.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function getOrders($countToReturn, $mindbox, $startingIndex, $operationName)
    {
        $queryParams = [
            'countToReturn' => $countToReturn,
            'mindbox'       => $mindbox,
            'startingIndex' => $startingIndex,
        ];

        $this->client->setResponseType(MindboxOrdersResponse::class);

        return $this->client->prepareRequest('POST', $operationName, null, 'by-customer', $queryParams, true, false);
    }
}
