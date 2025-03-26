<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        // Get all makers, car types, fuel types, cities and users
        $makers = Maker::all();
        if ($makers->isEmpty()) {
            $this->command->error('No makers found. Please run the MakerSeeder first.');
            return;
        }

        $carTypes = CarType::all();
        if ($carTypes->isEmpty()) {
            $this->command->error('No car types found. Please run the CarTypeSeeder first.');
            return;
        }

        $fuelTypes = FuelType::all();
        if ($fuelTypes->isEmpty()) {
            $this->command->error('No fuel types found. Please run the FuelTypeSeeder first.');
            return;
        }

        $cities = City::all();
        if ($cities->isEmpty()) {
            $this->command->error('No cities found. Please run the CitySeeder first.');
            return;
        }

        $users = User::all();
        if ($users->isEmpty()) {
            $this->command->error('No users found. Please run the UserFactory first.');
            return;
        }

        // For each maker
        foreach ($makers as $maker) {
            // Get all models for this maker
            $models = $maker->models;

            if ($models->isEmpty()) {
                $this->command->info("No models found for maker: {$maker->name}");
                continue;
            }

            // For each model
            foreach ($models as $model) {
                // Create between 1 and 3 car listings for each model
                $count = rand(1, 3);

                for ($i = 0; $i < $count; $i++) {
                    // Create car with only car-specific fields
                    $car = Car::create([
                        'maker_id' => $maker->id,
                        'model_id' => $model->id,
                        'year' => fake()->numberBetween(2015, 2023),
                        'price' => fake()->numberBetween(10000, 100000),
                        'vin' => strtoupper(fake()->regexify('[A-Z0-9]{17}')),
                        'mileage' => fake()->numberBetween(0, 100000),
                        'car_type_id' => $carTypes->random()->id,
                        'fuel_type_id' => $fuelTypes->random()->id,
                        'user_id' => $users->random()->id,
                        'city_id' => $cities->random()->id,
                        'address' => fake()->streetAddress(),
                        'phone' => fake()->phoneNumber(),
                        'description' => fake()->paragraphs(3, true),
                        'published_at' => fake()->dateTimeBetween('-1 month', 'now'),
                    ]);

                    // Now add features as a separate record
                    $car->setFeatures([
                        'abs' => fake()->boolean(85),
                        'air_conditioning' => fake()->boolean(80),
                        'power_windows' => fake()->boolean(75),
                        'power_door_locks' => fake()->boolean(70),
                        'cruise_control' => fake()->boolean(60),
                        'bluetooth_connectivity' => fake()->boolean(75),
                        'navigation_system' => fake()->boolean(40),
                        'remote_start' => fake()->boolean(30),
                        'gps_navigation' => fake()->boolean(40),
                        'heater_seats' => fake()->boolean(50),
                        'climate_control' => fake()->boolean(55),
                        'rear_parking_sensors' => fake()->boolean(60),
                        'leather_seats' => fake()->boolean(45),
                    ]);
                }
            }
        }
    }
}
