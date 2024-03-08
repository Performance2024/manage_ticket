<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Fonction;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = Service::whereName('search-dev')->first()->id;
        $fonction = Fonction::whereName('dev')->first()->id;

        Agent::create([
            'name' => 'Big Administrateur',
            'email' => 'admin@ticketexpress.com',
            'fonction_id' => $fonction,
            'service_id' => $service
        ]);
    }
}
