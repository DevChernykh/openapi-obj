<?php

declare(strict_types=1);

namespace Chernykh\OpenapiObj;

/**
 * Версия спецификации.
 */
enum Version: string
{
    case __3_1 = '3.1';

    public static function getDefault(): Version
    {
        return Version::__3_1;
    }
}
