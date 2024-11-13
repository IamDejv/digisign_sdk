<?php

declare(strict_types=1);

namespace DigitalCz\DigiSign\Resource;

use DigitalCz\DigiSign\Resource\Traits\EntityResourceTrait;

class AccountSecurity extends BaseResource
{
    use EntityResourceTrait;

    public bool $reuseRecipientAuthentication;

    public ?string $oidcPrompt = null;

    public bool $oidcLoginHint;

    public bool $oidcDomainHint;

    public int $discardedEnvelopeRetention;

    public ?int $envelopeAnonymizeRetention;

    /**
     * @var array<string>
     */
    public array $envelopeAnonymizeGroups;

    public bool $localSignature;

    public bool $continuousSigning;

    public bool $auditLogDownloadDefaultUnchecked;

    public int $discardedIdentificationRetention;

    public bool $signDocumentsAtOnce;

    public bool $visibleAutosignRoleOption;

    public bool $visibleNoneSignerChannelOption;

    public bool $hasCustomCertificate;
}
