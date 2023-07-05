<?php

namespace App\Observers\Cache;

use Illuminate\Database\Eloquent\Model;
use Conectala\CacheWrapper\Wrappers\Cache;

class ModelCachingObserver
{

    public function updating(Model $model): void
    {
        $this->deleteModelCache($model);
    }

    public function deleting(Model $model): void
    {
        $this->deleteModelCache($model);
    }

    protected function deleteModelCache(Model $model): void
    {
        Cache::forget($model->getOriginal(), fn() => true, $model);
    }
}
