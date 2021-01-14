<?php

namespace Mindbox\Tests\Clients;

use Mindbox\Clients\MindboxClientV3;

/**
 * Class MindboxClientV3Test
 *
 * @package Mindbox\Tests\Clients
 */
class MindboxClientV3Test extends AbstractMindboxClientTest
{
    /**
     * @var string
     */
    protected $endpointId = 'endpointId';

    /**
     * @return array
     */
    public function expectedArgsForSendProvider()
    {
        return [
            [
                [
                    'POST',
                    'operation',
                    $this->getDTOStub(),
                ],
                [
                    'apiVer'  => 'v3',
                    'url'     => 'https://api.mindbox.ru/v3/operations/sync?endpointId=' . $this->endpointId . '&operation=operation&deviceUUID=',
                    'method'  => 'POST',
                    'body'    => $this->getDTOStub()->toJson(),
                    'headers' => [
                        'Accept'        => 'application/json',
                        'Content-Type'  => 'application/json',
                        'Authorization' => 'Mindbox secretKey="' . $this->secret . '"',
                        'X-Customer-IP' => '',
                        'Mindbox-Integration' => 'PhpSDK',
                        'Mindbox-Integration-Version' => '1.0'
                    ],
                ],
            ],
            [
                [
                    'GET',
                    'operation',
                    $this->getDTOStub(),
                    'url',
                    ['param' => 'pam-pam'],
                    false,
                ],
                [
                    'apiVer'  => 'v3',
                    'url'     => 'https://api.mindbox.ru/v3/operations/async?param=pam-pam&endpointId=' . $this->endpointId . '&operation=operation&deviceUUID=',
                    'method'  => 'GET',
                    'body'    => $this->getDTOStub()->toJson(),
                    'headers' => [
                        'Accept'        => 'application/json',
                        'Content-Type'  => 'application/json',
                        'Authorization' => 'Mindbox secretKey="' . $this->secret . '"',
                        'X-Customer-IP' => '',
                        'Mindbox-Integration' => 'PhpSDK',
                        'Mindbox-Integration-Version' => '1.0'
                    ],
                ],
            ],
            [
                [
                    'POST',
                    'operation',
                    $this->getDTOStub(),
                    '',
                    [],
                    true,
                    false,
                ],
                [
                    'apiVer'  => 'v3',
                    'url'     => 'https://api.mindbox.ru/v3/operations/sync?endpointId=' . $this->endpointId . '&operation=operation',
                    'method'  => 'POST',
                    'body'    => $this->getDTOStub()->toJson(),
                    'headers' => [
                        'Accept'        => 'application/json',
                        'Content-Type'  => 'application/json',
                        'Authorization' => 'Mindbox secretKey="' . $this->secret . '"',
                        'Mindbox-Integration' => 'PhpSDK',
                        'Mindbox-Integration-Version' => '1.0'
                    ],
                ],
            ],
        ];
    }

    /**
     * @param mixed $secret
     * @param mixed $httpClient
     * @param mixed $loggerClient
     *
     * @return MindboxClientV3|\PHPUnit\Framework\MockObject\MockObject
     */
    protected function getClient($secret, $httpClient, $loggerClient)
    {
        $client = new MindboxClientV3($this->endpointId, $secret, $httpClient, $loggerClient);

        return $client;
    }
}
