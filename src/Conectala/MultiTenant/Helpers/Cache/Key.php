<?php

namespace App\Helpers\Cache;

use MpConnect\CacheWrapper\Helpers\Cache\Parts;

class Key extends Parts
{
    public static function retrievePrefixParts(): array
    {
        return [
            getTenantRequest(),
            getStoreRequest(),
        ];
    }
}
