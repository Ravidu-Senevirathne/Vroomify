<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CarImage extends Model
{
    protected $fillable =[
        'image_path',
        'position'
];

    public function car():BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
