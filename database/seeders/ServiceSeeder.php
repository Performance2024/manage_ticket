<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['name' => 'search-dev', 'description' => 'Recherche et dev'],
            ['name' => 'prospection', 'description' => 'Prospection'],
            ['name' => 'marketing', 'description' => 'Marketing'],
            ['name' => 'montage-video', 'description' => 'Montage Video'],
            ['name' => 'comptabilité', 'description' => 'Comptabilité'],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['name' => $service['name']], $service);
        }
    }
}
