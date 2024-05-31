<?php

namespace Lacora;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(realpath(__DIR__ . '/../database/migrations'));
    }
}
