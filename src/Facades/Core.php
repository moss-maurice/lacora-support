<?php

namespace Lacora\Facades;

use Illuminate\Support\Facades\Facade;

class Core extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'core';
    }
}
