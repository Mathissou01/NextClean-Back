<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campus;

class CampusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
    {
        Campus::create([
            'name' => 'Campus A',
            'address' => '123 Rue de la Liberté',
            'city' => 'Ville A',
            'postal_code' => '12345',
            'country' => 'Pays A',
        ]);

        Campus::create([
            'name' => 'Campus B',
            'address' => '456 Avenue de la République',
            'city' => 'Ville B',
            'postal_code' => '67890',
            'country' => 'Pays B',
        ]);

        Campus::create([
            'name' => 'Campus C',
            'address' => '789 Boulevard des Étoiles',
            'city' => 'Ville C',
            'postal_code' => '13579',
            'country' => 'Pays C',
        ]);

        Campus::create([
            'name' => 'Campus D',
            'address' => '987 Rue du Soleil',
            'city' => 'Ville D',
            'postal_code' => '24680',
            'country' => 'Pays D',
        ]);
    }
}