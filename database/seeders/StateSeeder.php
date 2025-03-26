<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            'Ohio',
            'Kansas',
            'Texas',
            'California',
            'Oregon',
            'New York',
            'Florida',
            'Washington'
        ];

        foreach ($states as $state) {
            DB::table('states')->insertOrIgnore(['name' => $state]);
        }
    }
}
