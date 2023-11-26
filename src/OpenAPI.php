<?php

declare(strict_types=1);

namespace Chernykh\OpenapiObj;

final class OpenAPI
{
    public function __construct(
        private readonly Version $version,
    ) {
    }

    public function getVersion(): Version
    {
        return $this->version;
    }
}
