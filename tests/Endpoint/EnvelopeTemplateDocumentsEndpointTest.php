<?php

declare(strict_types=1);

namespace DigitalCz\DigiSign\Endpoint;

/**
 * @covers \DigitalCz\DigiSign\Endpoint\EnvelopeTemplateDocumentsEndpoint
 */
class EnvelopeTemplateDocumentsEndpointTest extends EndpointTestCase
{
    public function testChildren(): void
    {
        self::assertDefaultEndpointPath(
            self::endpoint()->assignments(),
            '/api/envelope-templates/bar/documents/assignments',
        );
    }

    public function testCRUD(): void
    {
        self::assertCrudRequests(self::endpoint(), '/api/envelope-templates/bar/documents');
    }

    public function testDownload(): void
    {
        self::endpoint()->download('foo', ['foo' => 'bar']);
        self::assertLastRequest('GET', '/api/envelope-templates/bar/documents/foo/download?foo=bar');
    }

    public function testPositions(): void
    {
        self::endpoint()->positions(['foo' => 'bar']);
        self::assertLastRequest('PUT', '/api/envelope-templates/bar/documents/positions');
    }

    public function testReplaceFile(): void
    {
        self::endpoint()->replaceFile('moo', ['foo' => 'bar']);
        self::assertLastRequest('POST', '/api/envelope-templates/bar/documents/moo/replace-file', ['foo' => 'bar']);
    }

    protected static function endpoint(): EnvelopeTemplateDocumentsEndpoint
    {
        return self::dgs()->envelopeTemplates()->documents('bar');
    }
}
