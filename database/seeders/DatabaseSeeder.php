<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Empty the run method in here, replace with below

        // This is telling Laravel which seeders
        // need to run when we run the seeder command
        $this->call([
            ProductSeeder::class,
            PostSeeder::class
        ]);
    }
}
