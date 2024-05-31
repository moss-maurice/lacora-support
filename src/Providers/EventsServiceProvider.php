<?php

namespace Lacora\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Lacora\Events\ExampleEvent;
use Lacora\Listeners\ExampleListener;

class EventsServiceProvider extends ServiceProvider
{
    protected $listen = [
        ExampleEvent::class => [
            ExampleListener::class,
        ],
    ];
}
