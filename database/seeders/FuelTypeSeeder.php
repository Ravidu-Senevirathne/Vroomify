<?php

namespace Database\Seeders;

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
            'Hybrid'
        ];

        foreach ($fuelTypes as $type) {
            DB::table('fuel_type')->insertOrIgnore(['name' => $type]);
        }
    }
}
