<?php

namespace Conectala\MultiTenant\Helpers\Cache;

use Conectala\CacheWrapper\Helpers\Cache\Parts;

class Key extends Parts
{
    public static function retrievePrefixParts(): array
    {
        return [
            'tenant' => getTenantRequest() ?? 'tenant',
            'store_id' => getStoreRequest() ?? null,
        ];
    }
}
