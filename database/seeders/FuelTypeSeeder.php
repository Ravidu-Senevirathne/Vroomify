<?php

namespace Database\Seeders;

use App\Models\FuelType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuelTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fuelTypes = [
            'Gasoline',
            'Diesel',
            'Electric',
            'Hybrid',
            'Plug-in Hybrid',
            'Hydrogen',
            'Natural Gas',
            'Flex-Fuel'
        ];

        foreach ($fuelTypes as $type) {
            DB::table('fuel_type')->insertOrIgnore(['name' => $type]);
        }
    }
}
