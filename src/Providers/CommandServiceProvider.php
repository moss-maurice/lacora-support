<?php

namespace Lacora\Providers;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function register()
    {
        $commands = include realpath(app('core.path.config') . '/commands/commands.php');

        if (is_array($commands)) {
            logger()->info('Registering commands', ['commands' => $commands]);
            $this->commands($commands);
        } else {
            logger()->error('The commands configuration must be an array.', ['commands' => $commands]);
        }
    }
}
