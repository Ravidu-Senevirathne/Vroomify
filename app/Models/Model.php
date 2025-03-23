<?php

namespace App\Models;

use Illuminate\Database\Eloquent\EloquentModel;

class Model extends EloquentModel
{
    protected $fillable = [
        'name',
        'maker_id',
    ];
}
