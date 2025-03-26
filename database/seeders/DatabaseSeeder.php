<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user only if it doesn't exist
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        // Create 5 random users, but only if we have fewer than 6 users total
        $userCount = User::count();
        if ($userCount < 6) {
            User::factory(6 - $userCount)->create();
        }

        // Call other seeders in proper order to respect foreign key constraints
        $this->call([
            StateSeeder::class,      // State first as City depends on it
            CitySeeder::class,       // City needs State
            MakerSeeder::class,      // Maker first as Model depends on it
            ModelSeeder::class,      // Model needs Maker
            CarTypeSeeder::class,
            FuelTypeSeeder::class,
            CarSeeder::class,        // Car needs all the above
            CarImageSeeder::class,   // Images need Cars
            CarFeaturesSeeder::class, // Features need Cars
        ]);
    }
}
