<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FuelType extends Model
{
    protected $table = 'fuel_type';

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
    public function car(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
