<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create super-admin user
        $superAdmin = User::firstOrCreate(
            ['email' => 'alfarizq@gmail.com'],
            [
                'name' => 'Alfa Rizq',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
        
        // Assign super-admin role
        if (!$superAdmin->hasRole('super-admin')) {
            $superAdmin->assignRole('super-admin');
        }
        $superAdmin->givePermissionTo(Permission::all());

        // Create admin user
        $admin = User::firstOrCreate(
            ['email' => 'adminadmin@gmail.com'],
            [
                'name' => 'Atmint',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
        
        // Assign admin role
        if (!$admin->hasRole('admin')) {
            $admin->assignRole('admin');
        }

        $this->command->info('Users with roles created successfully!');
    }
}
