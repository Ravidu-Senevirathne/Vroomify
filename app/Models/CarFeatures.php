<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarFeatures extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'car_id';
    protected $fillable = [
        'car_id',
        'abs',
        'air_conditioning',
        'power_windows',
        'power_door_locks',
        'cruise_control',
        'bluetooth_connectivity',
        'navigation_system',
        'remote_start',
        'gps_navigation',
        'heater_seats', // This field needs to be checked if it's heater_seats or heated_seats in DB
        'climate_control',
        'rear_parking_sensors',
        'leather_seats',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
