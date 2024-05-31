<?php

namespace Lacora\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ExampleListener
{
    public function handle(object $event): void
    {
        dump('Example event handle');
    }
}
