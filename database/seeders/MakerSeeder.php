<?php

namespace Database\Seeders;

use App\Models\Maker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $makers = [
            'Toyota',
            'Honda',
            'Ford',
            'Chevrolet',
            'BMW',
            'Mercedes-Benz',
            'Audi',
            'Volkswagen',
            'Nissan',
            'Hyundai',
            'Kia',
            'Tesla',
            'Mazda',
            'Lexus',
            'Subaru'
        ];

        foreach ($makers as $maker) {
            // Using DB facade directly to avoid timestamp issues
            DB::table('makers')->insertOrIgnore(['name' => $maker]);
        }
    }
}
