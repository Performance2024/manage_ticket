<?php

namespace Database\Seeders;

use App\Models\Fonction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fonctions = [
            ['name' => 'dev', 'description' => 'Developpeur'],
            ['name' => 'prosp', 'description' => 'Prospecteur'],
            ['name' => 'marketeur', 'description' => 'Marketeur'],
            ['name' => 'monteur-video', 'description' => 'Monteur Video'],
        ];

        foreach ($fonctions as $fonction) {
            Fonction::updateOrCreate(['name' => $fonction['name']], $fonction);
        }
    }
}
