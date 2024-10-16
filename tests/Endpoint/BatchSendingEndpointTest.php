<?php

declare(strict_types=1);

namespace DigitalCz\DigiSign\Endpoint;

/**
 * @covers \DigitalCz\DigiSign\Endpoint\BatchSendingsEndpoint
 */
class BatchSendingEndpointTest extends EndpointTestCase
{
    public function testChildren(): void
    {
        self::assertDefaultEndpointPath(self::endpoint()->items('foo'), '/api/batch-sendings/foo/items');
    }

    public function testCRUD(): void
    {
        self::endpoint()->get('foo');
        self::assertLastRequest('GET', "/api/batch-sendings/foo");

        self::endpoint()->create([]);
        self::assertLastRequest('POST', "/api/batch-sendings");

        self::endpoint()->update('foo', []);
        self::assertLastRequest('PUT', "/api/batch-sendings/foo");

        self::endpoint()->delete('foo');
        self::assertLastRequest('DELETE', "/api/batch-sendings/foo");
    }

    public function testSend(): void
    {
        self::endpoint()->send('foo');
        self::assertLastRequest('POST', "/api/batch-sendings/foo/send");
    }

    protected static function endpoint(): BatchSendingsEndpoint
    {
        return self::dgs()->batchSendings();
    }
}
