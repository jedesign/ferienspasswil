<?php

namespace Database\Seeders;

use App\Models\Allergy;
use Illuminate\Database\Seeder;

class AllergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allergies = [
            'Glutenhaltiges Getreide',
            'Krebstiere',
            'Eier',
            'Fisch',
            'Erdnüsse',
            'Soja',
            'Milch / Laktose',
            'Schalenfrüchte',
            'Sellerie',
            'Senf',
            'Sesamsamen',
            'Schwefeldioxid / Sulfite',
            'Lupine',
            'Weichtiere',
        ];
        foreach ($allergies as $allergy) {
            Allergy::create(['title' => $allergy]);
        }
    }
}
