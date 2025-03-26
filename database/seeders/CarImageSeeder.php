<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Database\Seeder;

class CarImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = Car::all();
        $placeholderImages = [
            '/img/car-placeholder-1.jpg',
            '/img/car-placeholder-2.jpg',
            '/img/car-placeholder-3.jpg',
            '/img/car-placeholder-4.jpg',
            '/img/car-placeholder-5.jpg',
        ];

        // If you don't have placeholder images yet, use these URLs
        if (!file_exists(public_path('/img/car-placeholder-1.jpg'))) {
            $placeholderImages = [
                'https://via.placeholder.com/800x600.png?text=Car+Image+1',
                'https://via.placeholder.com/800x600.png?text=Car+Image+2',
                'https://via.placeholder.com/800x600.png?text=Car+Image+3',
                'https://via.placeholder.com/800x600.png?text=Car+Image+4',
                'https://via.placeholder.com/800x600.png?text=Car+Image+5',
            ];
        }

        foreach ($cars as $car) {
            // Create between 1 and 5 images for each car
            $imageCount = rand(1, 5);

            for ($i = 0; $i < $imageCount; $i++) {
                CarImage::create([
                    'car_id' => $car->id,
                    'image_path' => $placeholderImages[$i % count($placeholderImages)],
                    'position' => $i + 1,
                ]);
            }
        }
    }
}
