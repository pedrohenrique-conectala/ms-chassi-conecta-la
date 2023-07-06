<?php

namespace App\Observers\Cache;

use Illuminate\Database\Eloquent\Model;
use Conectala\CacheWrapper\Wrappers\Cache;

class ModelCachingObserver
{

    public function saving(Model $model): void
    {
        $this->deleteModelCache($model);
    }

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
        $modelName = method_exists($model, 'slugName') ? $model->slugName() : strtolower(get_class($model));
        Cache::forget(array_merge($model->getOriginal(), ['_model' => $modelName]), fn() => true, $model);
    }
}
