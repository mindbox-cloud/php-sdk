<?php

namespace Mindbox\Tests\Clients;

use Mindbox\HttpClients\HttpClientRawResponse;
use PHPUnit\Framework\TestCase;

/**
 * Class HttpClientRawResponseTest
 *
 * @package Mindbox\Tests\Clients
 * @coversDefaultClass \Mindbox\HttpClients\HttpClientRawResponse
 */
class HttpClientRawResponseTest extends TestCase
{
    /**
     * @var string
     */
    protected $fakeRawProxyHeader = "HTTP/1.0 200 Connection established
Proxy-agent: Kerio Control/7.1.1 build 1971\r\n\r\n";

    /**
     * @var string
     */
    protected $fakeRawHeader = <<<HEADER
{{HTTP}} 200 OK
Cache-Control: private
Content-Type: application/xml; charset=utf-8
X-Request-ID: cdd8cbeb-58d5-401f-b2b7-e992b0a7c481
X-NewRelic-App-Data: PxQGU1BVDgMTUVRRAgAPX1ETGhE1AwE2QgNWEVlbQFtcCxYsZyIcNFdlUhMQCltWQycODEN=
X-Server-Name: DUBLIN
X-Revision: e65e82e599c17673bb6726be3fb7b5ae0336cdbf
Date: Mon, 21 Jan 2019 14:56:41 GMT
Content-Length: 145
HEADER;

    /**
     * @var array
     */
    protected $fakeHeadersAsArray = [
        'Cache-Control'       => 'private',
        'Content-Type'        => 'application/xml; charset=utf-8',
        'X-Request-ID'        => 'cdd8cbeb-58d5-401f-b2b7-e992b0a7c481',
        'X-NewRelic-App-Data' => 'PxQGU1BVDgMTUVRRAgAPX1ETGhE1AwE2QgNWEVlbQFtcCxYsZyIcNFdlUhMQCltWQycODEN=',
        'X-Server-Name'       => 'DUBLIN',
        'X-Revision'          => 'e65e82e599c17673bb6726be3fb7b5ae0336cdbf',
        'Date'                => 'Mon, 21 Jan 2019 14:56:41 GMT',
        'Content-Length'      => '145',
    ];

    /**
     * @covers ::__construct
     */
    public function testRawResponseConstructor()
    {
        $headers  = str_replace('{{HTTP}}', 'HTTP/1.0', $this->fakeRawHeader);
        $body     = 'MyBodyString';
        $response = new HttpClientRawResponse([$headers], $body);

        $this->assertInstanceOf(HttpClientRawResponse::class, $response);
    }

    /**
     * @covers ::getStatusCode
     */
    public function testGetStatusCode()
    {
        $body    = '';

        // HTTP/1.0
        $headers  = str_replace('{{HTTP}}', 'HTTP/1.0', $this->fakeRawHeader);
        $response = new HttpClientRawResponse([$headers], $body);
        $this->assertEquals(200, $response->getStatusCode());

        // HTTP/1.1
        $headers  = str_replace('{{HTTP}}', 'HTTP/1.1', $this->fakeRawHeader);
        $response = new HttpClientRawResponse([$headers], $body);
        $this->assertEquals(200, $response->getStatusCode());

        // HTTP/2
        $headers  = str_replace('{{HTTP}}', 'HTTP/2', $this->fakeRawHeader);
        $response = new HttpClientRawResponse([$headers], $body);
        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * @covers ::getHeaders
     */
    public function testGetHeaders()
    {
        $headers  = str_replace('{{HTTP}}', 'HTTP/1.0', $this->fakeRawHeader);
        $body     = '';
        $response = new HttpClientRawResponse([$headers], $body);
        $headers  = $response->getHeaders();
        $this->assertSame($this->fakeHeadersAsArray, $headers);
    }

    /**
     * @covers ::getHeaders
     * @covers ::getStatusCode
     */
    public function testWillIgnoreProxyHeaders()
    {
        $headers  = str_replace('{{HTTP}}', 'HTTP/1.0', $this->fakeRawHeader);
        $body     = '';
        $response = new HttpClientRawResponse([$this->fakeRawProxyHeader . $headers], $body);
        $headers  = $response->getHeaders();
        $code     = $response->getStatusCode();
        $this->assertEquals($this->fakeHeadersAsArray, $headers);
        $this->assertEquals(200, $code);
    }

    /**
     * @covers ::getBody
     */
    public function testGetBody()
    {
        $headers  = [];
        $body     = 'myBodyString';
        $response = new HttpClientRawResponse($headers, $body);
        $this->assertSame($body, $response->getBody());
    }
}
