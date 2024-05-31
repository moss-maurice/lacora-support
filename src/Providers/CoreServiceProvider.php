<?php

namespace Lacora\Providers;

use Illuminate\Support\ServiceProvider;
use Lacora\Services\CoreService;

class CoreServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('core', function ($app) {
            return new CoreService;
        });
    }
}
