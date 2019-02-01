<?php

namespace Mindbox\Helpers;

/**
 * Хелпер, являющий обёрткой над универсальным запросом. Содержит методы для отправки запросов, связанных с изменением
 * списка продуктов в корзине.
 * Class CartHelper
 *
 * @package Mindbox\Helpers
 */
class ProductListHelper extends AbstractMindboxHelper
{
    /**
     * Выполняет вызов стандартной операции Website.AddToCart:
     *
     * @see https://developers.mindbox.ru/docs/prodlistactionxml
     *
     * @param \Mindbox\DTO\AddProductToListRequestDTO $product       Объект, содержащий данные продукта для запроса.
     * @param string                                  $operationName Название операции.
     * @param bool                                    $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                               DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function addToCart(\Mindbox\DTO\AddProductToListRequestDTO $product, $operationName, $addDeviceUUID = true)
    {
        $operation = $this->createOperation();
        $operation->setAddProductToList($product);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], false, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.RemoveFromCart:
     *
     * @see https://developers.mindbox.ru/docs/prodlistactionxml
     *
     * @param \Mindbox\DTO\RemoveProductFromListRequestDTO $product       Объект, содержащий данные продукта для
     *                                                                    запроса.
     * @param string                                       $operationName Название операции.
     * @param bool                                         $addDeviceUUID Флаг, сообщающий о необходимости передать в
     *                                                                    запросе DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function removeFromCart(
        \Mindbox\DTO\RemoveProductFromListRequestDTO $product,
        $operationName,
        $addDeviceUUID = true
    ) {
        $operation = $this->createOperation();
        $operation->setRemoveProductFromList($product);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], false, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.SetProductCount:
     *
     * @see https://developers.mindbox.ru/docs/prodlistactionxml
     *
     * @param \Mindbox\DTO\SetProductCountInListRequestDTO $product       Объект, содержащий данные продукта для
     *                                                                    запроса.
     * @param string                                       $operationName Название операции.
     * @param bool                                         $addDeviceUUID Флаг, сообщающий о необходимости передать в
     *                                                                    запросе DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function setProductCount(
        \Mindbox\DTO\SetProductCountInListRequestDTO $product,
        $operationName,
        $addDeviceUUID = true
    ) {
        $operation = $this->createOperation();
        $operation->setSetProductCountInList($product);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], false, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.SetProductList:
     *
     * @see https://developers.mindbox.ru/docs/prodlistactionxml
     *
     * @param \Mindbox\DTO\ProductListItemRequestCollection $products         Объект, содержащий данные списка
     *                                                                        продуктов
     *                                                                        для запроса.
     * @param string                                        $operationName    Название операции.
     * @param \Mindbox\DTO\CustomerIdentityRequestDTO|null  $customerIdentity Объект, содержащий данные потребителя для
     *                                                                        запроса.
     * @param bool                                          $addDeviceUUID    Флаг, сообщающий о необходимости передать
     *                                                                        в запросе DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function setProductList(
        \Mindbox\DTO\ProductListItemRequestCollection $products,
        $operationName,
        \Mindbox\DTO\CustomerIdentityRequestDTO $customerIdentity = null,
        $addDeviceUUID = true
    ) {
        $operation = $this->createOperation();
        $operation->setProductList($products);
        if (isset($customerIdentity)) {
            $operation->setCustomer($customerIdentity);
        }

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], false, $addDeviceUUID);
    }
}
