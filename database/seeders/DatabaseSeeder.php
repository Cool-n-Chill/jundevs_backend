<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Role::factory()->create([
            'title' => 'Admin'
        ]);
        \App\Models\Role::factory()->create([
            'title' => 'Project owner'
        ]);
        \App\Models\Role::factory()->create([
            'title' => 'Employee'
        ]);
        \App\Models\Role::factory()->create([
            'title' => 'Unemployed'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role_id' => 4
        ]);
    }
}
