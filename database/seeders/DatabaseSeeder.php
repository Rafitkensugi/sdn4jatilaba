<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======

>>>>>>> 7ea83d0c7ca3a91382592fbbdbed99e6529b90a5
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ArtikelSeeder::class,

            $this->call([
        PrestasiSeeder::class,
    ])
        ]);


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
