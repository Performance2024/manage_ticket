<?php

namespace Database\Seeders;

use App\Models\SeverityLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeverityLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $severity_levels = [
            ['name' => 'low', 'description' => 'Faible', 'color' => '#22c55e'],
            ['name' => 'medium', 'description' => 'Faible', 'color' => '#eab308'],
            ['name' => 'hight', 'description' => 'Faible', 'color' => '#ef4444'],
        ];


        foreach ($severity_levels as $severity_level) {
            SeverityLevel::updateOrCreate(['name' => $severity_level['name']], $severity_level);
        }
    }
}
