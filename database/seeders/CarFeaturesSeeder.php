<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarFeatures;
use Illuminate\Database\Seeder;

class CarFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all cars without features
        $cars = Car::whereDoesntHave('features')->get();

        foreach ($cars as $car) {
            CarFeatures::create([
                'car_id' => $car->id,
                'abs' => rand(0, 1),
                'air_conditioning' => rand(0, 1),
                'power_windows' => rand(0, 1),
                'power_door_locks' => rand(0, 1),
                'cruise_control' => rand(0, 1),
                'bluetooth_connectivity' => rand(0, 1),
                'navigation_system' => rand(0, 1),
                'remote_start' => rand(0, 1),
                'gps_navigation' => rand(0, 1),
                'heater_seats' => rand(0, 1),
                'climate_control' => rand(0, 1),
                'rear_parking_sensors' => rand(0, 1),
                'leather_seats' => rand(0, 1),
            ]);
        }
    }
}
