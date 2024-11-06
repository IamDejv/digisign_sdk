<?php

declare(strict_types=1);

namespace DigitalCz\DigiSign\Resource;

class BatchSendingStats extends BaseResource
{
    public int $total;

    public int $success;

    public int $failed;

    public int $waiting;

    public int $sent;

    public int $completed;

    public int $declined;

    public int $expired;

    public int $cancelled;

    public int $disapproved;

    public int $deliveryFailed;

    public int $sendSignedDocumentsFailed;

    public int $identificationFailed;
}
