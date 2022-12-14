<?php

namespace Conectala\MultiTenant\Repositories;

use Conectala\MultiTenant\Models\TenantClient;
use App\Repositories\AbstractRepository;

class TenantClientRepository extends AbstractRepository
{
    /**
     * @var TenantClient $model
     */
    protected mixed $model = TenantClient::class;
}
