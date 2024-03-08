<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin', 'description' => 'Administrateur'],
            ['name' => 'staff', 'description' => 'Agent'],
            ['name' => 'lead-staff', 'description' => 'Chef service'],
            ['name' => 'collector', 'description' => 'Collecteur des ticket'],
            ['name' => 'client', 'description' => 'Clients'],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(['name' => $role['name']], $role);
        }
    }
}
