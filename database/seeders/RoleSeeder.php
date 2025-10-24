<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $superAdmin = Role::firstOrCreate(['name' => 'super-admin']);
        $admin = Role::firstOrCreate(['name' => 'admin']);

        $permissions =
        [
            'access admin panel',
            'create teacher account',
        ];

        foreach ($permissions as $permission)
        {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $admin->givePermissionTo('access admin panel');
    }
}
