<?php

namespace Lacora\Models;

use Illuminate\Database\Eloquent\Model;

class Plugins extends Model
{
    protected $fillable = [
        'name',
        'class',
        'active',
    ];
}
