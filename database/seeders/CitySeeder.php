<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $citiesByState = [
            'Ohio' => ['New Britneystad', 'Lindstad', 'Carmelstad', 'West Lulu', 'Loganshire'],
            'Kansas' => ['Lake Kelsi', 'Monroeside', 'Cormierville', 'East Ladarius', 'Doylebury'],
            'California' => ['Toyport', 'New Bennieville', 'Demarcotown', 'Dareville', 'Maximilliaberg'],
            'Oregon' => ['Larsonview', 'Muellerville', 'East Alfonso', 'South Shanellefort', 'Port Johnson'],
            'New York' => ['New Devenmouth', 'North Alvah', 'Kelvinmouth', 'Kemmerchester', 'Kunzeview']
        ];

        foreach ($citiesByState as $stateName => $cities) {
            $state = State::where('name', $stateName)->first();
            if ($state) {
                foreach ($cities as $cityName) {
                    DB::table('cities')->insertOrIgnore([
                        'name' => $cityName,
                        'state_id' => $state->id
                    ]);
                }
            }
        }
    }
}
