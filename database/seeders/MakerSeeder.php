<?php

namespace Database\Seeders;

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
            'Ford',
            'Honda',
            'Chevrolet',
            'Nissan',
            'Lexus',
            'BMW',
            'Mercedes-Benz',
            'Audi',
            'Volkswagen',
            'Hyundai',
            'Kia',
            'Tesla',
            'Mazda',
            'Subaru'
        ];

        foreach ($makers as $maker) {
            DB::table('makers')->insertOrIgnore(['name' => $maker]);
        }
    }
}
