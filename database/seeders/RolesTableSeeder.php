<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Admin',
        ]);
        Role::create([
            'name' => 'Staff',
        ]);
        Role::create([
            'name' => 'User',
        ]);
        Role::create([
            'name' => 'Super Admin',
        ]);
    }
}
