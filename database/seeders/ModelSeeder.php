<?php

namespace Database\Seeders;

use App\Models\Maker;
use App\Models\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            'Toyota' => ['Corolla', 'Camry', 'RAV4', 'Highlander', 'Tacoma', 'Prius'],
            'Honda' => ['Civic', 'Accord', 'CR-V', 'Pilot', 'Odyssey', 'Fit'],
            'Ford' => ['F-150', 'Escape', 'Explorer', 'Mustang', 'Edge', 'Focus'],
            'Chevrolet' => ['Silverado', 'Equinox', 'Tahoe', 'Malibu', 'Traverse', 'Camaro'],
            'BMW' => ['3 Series', '5 Series', 'X3', 'X5', '7 Series', 'i4'],
            'Mercedes-Benz' => ['C-Class', 'E-Class', 'GLC', 'S-Class', 'GLE', 'A-Class'],
            'Audi' => ['A4', 'Q5', 'A6', 'Q3', 'A3', 'e-tron'],
            'Volkswagen' => ['Golf', 'Passat', 'Tiguan', 'Atlas', 'Jetta', 'ID.4'],
            'Nissan' => ['Altima', 'Rogue', 'Sentra', 'Pathfinder', 'Maxima', 'Leaf'],
            'Hyundai' => ['Elantra', 'Tucson', 'Santa Fe', 'Sonata', 'Kona', 'Palisade'],
            'Kia' => ['Forte', 'Sorento', 'Sportage', 'Telluride', 'Soul', 'K5'],
            'Tesla' => ['Model 3', 'Model Y', 'Model S', 'Model X', 'Cybertruck'],
            'Mazda' => ['CX-5', 'Mazda3', 'CX-9', 'Mazda6', 'MX-5 Miata', 'CX-30'],
            'Lexus' => ['RX', 'ES', 'NX', 'IS', 'GX', 'UX'],
            'Subaru' => ['Outback', 'Forester', 'Crosstrek', 'Legacy', 'Ascent', 'Impreza']
        ];

        foreach ($models as $makerName => $modelNames) {
            $maker = Maker::where('name', $makerName)->first();

            if ($maker) {
                foreach ($modelNames as $modelName) {
                    // Using DB facade directly to avoid timestamp issues
                    DB::table('models')->insertOrIgnore([
                        'name' => $modelName,
                        'maker_id' => $maker->id
                    ]);
                }
            }
        }
    }
}
