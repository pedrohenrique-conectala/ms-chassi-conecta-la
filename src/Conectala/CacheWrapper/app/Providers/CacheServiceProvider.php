<?php

namespace App\Providers;

use App\Models\Setting;
use App\Observers\Cache\ModelCachingObserver;
use Conectala\CacheWrapper\Mappers\CacheKeyMap;
use Illuminate\Support\ServiceProvider;

class CacheServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Setting::observe(ModelCachingObserver::class);
    }
}
