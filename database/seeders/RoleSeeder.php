<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'view prestasi',
            'create prestasi',
            'edit prestasi',
            'delete prestasi',
            'view berita',
            'create berita',
            'edit berita',
            'delete berita',
            'view pengumuman',
            'create pengumuman',
            'edit pengumuman',
            'delete pengumuman',
            'view guru',
            'create guru',
            'edit guru',
            'delete guru',
            'manage users',
            'manage roles',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles and assign permissions
        $superAdmin = Role::firstOrCreate(['name' => 'super-admin']);
        $superAdmin->givePermissionTo(Permission::all());

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->givePermissionTo([
            'view prestasi', 'create prestasi', 'edit prestasi', 'delete prestasi',
            'view berita', 'create berita', 'edit berita', 'delete berita',
            'view pengumuman', 'create pengumuman', 'edit pengumuman', 'delete pengumuman',
            'view guru', 'create guru', 'edit guru', 'delete guru',
        ]);

        $user = Role::firstOrCreate(['name' => 'user']);
        $user->givePermissionTo(['view prestasi', 'view berita', 'view pengumuman']);
    }
}