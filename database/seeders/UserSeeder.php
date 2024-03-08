<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Agent;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::whereName('admin')->first()->id;
        $agent = Agent::whereEmail('admin@ticketexpress.com')->first();

        $user = User::updateOrCreate(
            [
                'email' => $agent->email
            ],
            [
                'password' => bcrypt('123456'),
                'agent_id' => $agent->id,
                'email_verified_at' => now()
            ]
        );
        $user->assignRole($role);
    }
}
