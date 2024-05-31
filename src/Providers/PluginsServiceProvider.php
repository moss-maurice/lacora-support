<?php

namespace Lacora\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider;
use Illuminate\Support\Facades\Schema;
use Lacora\Models\Plugins;
use Lacora\Services\PluginService;

class PluginsServiceProvider extends EventServiceProvider
{
    public function boot()
    {
        parent::boot();

        if (Schema::hasTable((new Plugins)->getTable())) {
            $pluginService = new PluginService();

            $pluginService->loadPlugins();
        }
    }
}
