<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all available states to distribute cities among them
        $states = State::all();

        if ($states->isEmpty()) {
            throw new \Exception('No states found. Please run StateSeeder first.');
        }

        $cities = [
            'New York',
            'Los Angeles',
            'Chicago',
            'Houston',
            'Phoenix',
            'Philadelphia',
            'San Antonio',
            'San Diego',
            'Dallas',
            'San Jose',
            'Austin',
            'Jacksonville',
            'Fort Worth',
            'Columbus',
            'San Francisco',
            'Charlotte',
            'Indianapolis',
            'Seattle',
            'Denver',
            'Boston'
        ];

        foreach ($cities as $city) {
            // Assign a random state to each city
            $randomState = $states->random();

            City::create([
                'name' => $city,
                'state_id' => $randomState->id
            ]);
        }
    }
}
