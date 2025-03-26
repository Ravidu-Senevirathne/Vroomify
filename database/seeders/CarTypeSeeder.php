<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carTypes = [
            'Sedan',
            'SUV',
            'Truck',
            'Coupe',
            'Hatchback',
            'Convertible',
            'Wagon',
            'Van',
            'Minivan',
            'Crossover'
        ];

        foreach ($carTypes as $type) {
            DB::table('car_type')->insertOrIgnore(['name' => $type]);
        }
    }
}
