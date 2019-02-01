<?php

namespace Mindbox\Helpers;

/**
 * Хелпер, являющий обёрткой над универсальным запросом. Содержит методы для отправки запросов, связанных с
 * действиями над потребителем.
 * Class CustomerHelper
 *
 * @package Mindbox\Helpers
 */
class CustomerHelper extends AbstractMindboxHelper
{
    /**
     * Выполняет вызов стандартной операции Website.AuthorizeCustomer:
     * @see https://developers.mindbox.ru/v3.0/docs/json
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function authorize(\Mindbox\DTO\CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)
    {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], false, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.CheckCustomerByMobilePhone:
     * @see https://developers.mindbox.ru/docs/получение-данных-потребителя
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function checkByPhone(\Mindbox\DTO\CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)
    {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], true, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.CheckCustomerByEmail:
     * @see https://developers.mindbox.ru/docs/получение-данных-потребителя
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function checkByMail(\Mindbox\DTO\CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)
    {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], true, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.RegisterCustomer:
     * @see https://developers.mindbox.ru/v3.0/docs/json
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function register(\Mindbox\DTO\CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)
    {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], true, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.EditCustomer:
     * @see https://developers.mindbox.ru/docs/userredxml
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function edit(\Mindbox\DTO\CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)
    {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], true, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.FillCustomerProfile:
     * @see https://developers.mindbox.ru/docs/userredxml
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function fill(\Mindbox\DTO\CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)
    {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], true, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.GetCustomerDataByDiscountCard:
     *
     * @see https://developers.mindbox.ru/docs/получение-данных-потребителя
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function getDataByDiscountCard(
        \Mindbox\DTO\CustomerRequestDTO $customer,
        $operationName,
        $addDeviceUUID = true
    ) {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], true, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.MergeCustomers:
     * @see https://developers.mindbox.ru/docs/объединение-потребителей-по-запросу
     *
     * @param \Mindbox\DTO\MergeCustomersRequestDTO $customersToMerge Объект, содержащий данные объединяемых
     *                                                                потребителей для запроса.
     * @param string                                $operationName    Название операции.
     * @param bool                                  $addDeviceUUID    Флаг, сообщающий о необходимости передать в
     *                                                                запросе DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function merge(
        \Mindbox\DTO\MergeCustomersRequestDTO $customersToMerge,
        $operationName,
        $addDeviceUUID = true
    ) {
        return $this->client->prepareRequest('POST', $operationName, $customersToMerge, '', [], true, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.CheckCustomerIsInLoyalityProgram:
     * @see https://developers.mindbox.ru/docs/получение-сегментов-потребителя
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function checkActive(\Mindbox\DTO\CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)
    {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], true, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.GetCustomerBonusPointsHistory:
     * @see https://developers.mindbox.ru/docs/получение-истории-изменений-баланса-потребителя
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param \Mindbox\DTO\PageRequestDTO     $page          Объект, содержащий данные пагинации для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function getBonusPointsHistory(
        \Mindbox\DTO\CustomerRequestDTO $customer,
        \Mindbox\DTO\PageRequestDTO $page,
        $operationName,
        $addDeviceUUID = true
    ) {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);
        $operation->setPage($page);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], true, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.SendMobilePhoneAuthorizationCode:
     * @see https://developers.mindbox.ru/docs/send-confirmation-code
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     * @param bool                            $isSync        Флаг, сообщающий о необходимости выполнять запрос
     *                                                       синхронно/асинхронно.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function sendAuthorizationCode(
        \Mindbox\DTO\CustomerRequestDTO $customer,
        $operationName,
        $addDeviceUUID = true,
        $isSync = true
    ) {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], $isSync, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.CheckMobilePhoneAuthorizationCode:
     * @see https://developers.mindbox.ru/docs/по-секретному-коду
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer             Объект, содержащий данные потребителя для запроса.
     * @param string                          $authentificationCode Код аутентификации.
     * @param string                          $operationName        Название операции.
     * @param bool                            $addDeviceUUID        Флаг, сообщающий о необходимости передать в запросе
     *                                                              DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function checkAuthorizationCode(
        \Mindbox\DTO\CustomerRequestDTO $customer,
        $authentificationCode,
        $operationName,
        $addDeviceUUID = true
    ) {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);
        $operation->setAuthentificationCode($authentificationCode);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], true, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.ResendMobilePhoneConfirmationCode:
     * @see https://developers.mindbox.ru/docs/send-confirmation-code
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     * @param bool                            $isSync        Флаг, сообщающий о необходимости выполнять запрос
     *                                                       синхронно/асинхронно.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function resendConfirmationCode(
        \Mindbox\DTO\CustomerRequestDTO $customer,
        $operationName,
        $addDeviceUUID = true,
        $isSync = true
    ) {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], $isSync, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.ConfirmMobilePhone:
     * @see https://developers.mindbox.ru/docs/подтверждение-мобильного-телефона
     *
     * @param \Mindbox\DTO\CustomerRequestDTO        $customer        Объект, содержащий данные потребителя для
     *                                                                запроса.
     * @param \Mindbox\DTO\SmsConfirmationRequestDTO $smsConfirmation Объект, содержащий код подтверждения.
     * @param string                                 $operationName   Название операции.
     * @param bool                                   $addDeviceUUID   Флаг, сообщающий о необходимости передать в
     *                                                                запросе DeviceUUID.
     * @param bool                                   $isSync          Флаг, сообщающий о необходимости выполнять запрос
     *                                                                синхронно/асинхронно.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function confirmMobile(
        \Mindbox\DTO\CustomerRequestDTO $customer,
        \Mindbox\DTO\SmsConfirmationRequestDTO $smsConfirmation,
        $operationName,
        $addDeviceUUID = true,
        $isSync = true
    ) {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);
        $operation->setSmsConfirmation($smsConfirmation);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], $isSync, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.SubscribeCustomer:
     * @see https://developers.mindbox.ru/v3.0/docs/json
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     * @param bool                            $isSync        Флаг, сообщающий о необходимости выполнять запрос
     *                                                       синхронно/асинхронно.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function subscribe(
        \Mindbox\DTO\CustomerRequestDTO $customer,
        $operationName,
        $addDeviceUUID = true,
        $isSync = true
    ) {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], $isSync, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.AutoConfirmMobilePhone:
     * @see https://developers.mindbox.ru/v3.0/docs/подтверждение-мобильного-телефона-на-стороне-клиента
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function autoConfirmMobile(\Mindbox\DTO\CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)
    {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], false, $addDeviceUUID);
    }

    /**
     * Выполняет вызов стандартной операции Website.GetCustomerBalance:
     * @see https://developers.mindbox.ru/v3.0/docs/получение-баланса-потребителя
     *
     * @param \Mindbox\DTO\CustomerRequestDTO $customer      Объект, содержащий данные потребителя для запроса.
     * @param string                          $operationName Название операции.
     * @param bool                            $addDeviceUUID Флаг, сообщающий о необходимости передать в запросе
     *                                                       DeviceUUID.
     *
     * @return \Mindbox\Clients\AbstractMindboxClient
     */
    public function getBalance(\Mindbox\DTO\CustomerRequestDTO $customer, $operationName, $addDeviceUUID = true)
    {
        $operation = $this->createOperation();
        $operation->setCustomer($customer);

        return $this->client->prepareRequest('POST', $operationName, $operation, '', [], true, $addDeviceUUID);
    }
}
