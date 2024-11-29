<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Our job is to write some code in the run method
        // to tell laravel how to fill the table with dummy data

        // Laravel comes with a tool called faker that allows us
        // to generate realistic dummy data
        $faker = \Faker\Factory::create(); // Gets us access to faker

        $faker->date();

        for ($i = 0; $i < 100; $i++) {
            DB::table('products')->insert([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph(2),
                'image' => $faker->imageUrl(),
                'quantity' => rand(0, 100),
                'price' => $faker->randomFloat(2, 1, 400),
            ]);
        }
    }
}
