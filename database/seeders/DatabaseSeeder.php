<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======


>>>>>>> 306f0dd6457bfe98ec843d142cb40ffc37e5328c
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
