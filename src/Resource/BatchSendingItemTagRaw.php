<?php

declare(strict_types=1);

namespace DigitalCz\DigiSign\Resource;

class BatchSendingItemTagRaw extends BaseResource
{
    public ?string $alias;

    public ?string $customIdentifier;

    public ?string $value;
}
