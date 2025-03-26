<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample image paths to use for seeding
        $imagePaths = [
            '/img/cars/Lexus-RX200t-2016/1.jpeg',
            '/img/cars/Lexus-RX200t-2016/2.jpeg',
            '/img/cars/Lexus-RX200t-2016/3.jpeg',
            '/img/cars/Lexus-RX200t-2016/4.jpeg',
            '/img/car-png-39071.png',
        ];

        // Get all cars
        $cars = Car::all();

        // Add 2-5 random images to each car
        foreach ($cars as $car) {
            $numImages = rand(2, 5);

            for ($i = 0; $i < $numImages; $i++) {
                DB::table('car_images')->insert([
                    'car_id' => $car->id,
                    'image_path' => $imagePaths[array_rand($imagePaths)],
                    'position' => $i
                ]);
            }
        }
    }
}
