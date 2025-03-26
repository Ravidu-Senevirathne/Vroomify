<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all available makers, models, car types, fuel types, cities and users
        $makers = Maker::all();
        $carTypes = CarType::all();
        $fuelTypes = FuelType::all();
        $cities = City::all();
        $users = User::all();

        // Create 50 cars
        for ($i = 0; $i < 50; $i++) {
            // Select random maker
            $maker = $makers->random();
            // Get models for this maker
            $models = Model::where('maker_id', $maker->id)->get();

            // Check if there are models for this maker
            if ($models->isEmpty()) {
                // Skip this iteration and try again
                $i--;
                continue;
            }

            // Generate random data for the car
            $year = rand(2010, 2023);
            $price = rand(5000, 80000);
            $mileage = rand(1000, 150000);
            $publishedAt = now()->subDays(rand(1, 30));

            // Create the car
            Car::create([
                'maker_id' => $maker->id,
                'model_id' => $models->random()->id,
                'year' => $year,
                'price' => $price,
                'vin' => strtoupper(substr(str_shuffle(MD5(microtime())), 0, 17)),
                'mileage' => $mileage,
                'car_type_id' => $carTypes->random()->id,
                'fuel_type_id' => $fuelTypes->random()->id,
                'user_id' => $users->random()->id,
                'city_id' => $cities->random()->id,
                'address' => fake()->streetAddress(),
                'phone' => fake()->phoneNumber(),
                'description' => fake()->paragraphs(3, true),
                'published_at' => $publishedAt,
            ]);
        }
    }
}
