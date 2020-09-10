<?php

declare(strict_types=1);

namespace DigitalCz\DigiSign\Http\Request\Envelope;

use DigitalCz\DigiSign\Http\Request\BaseHttpRequest;
use Psr\Http\Message\RequestInterface;

class EnvelopeDonwloadGetRequest extends BaseHttpRequest
{

    public const URI = '/api/envelopes/%s/download';

    public function __invoke(string $envelopeId, ?string $output = null, ?bool $includeLog = null): RequestInterface
    {
        return $this->createRequestToken(
            'GET',
            sprintf($this->resolveUriWithParams($output, $includeLog), $envelopeId)
        );
    }

    private function resolveUriWithParams(?string $output = null, ?bool $includeLog = null): string
    {
        $uriData = [];

        if ($output) {
            $uriData['output'] = $output;
        }

        if ($includeLog) {
            $uriData['include_log'] = $includeLog;
        }

        $uriParams = '';

        if (count($uriData)) {
            $uriParams = "?" . http_build_query($uriData);
        }

        return self::URI . $uriParams;
    }
}
