<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create(); // Gets us access to faker

        for ($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->words(3, true),
                'content' => $faker->paragraphs(3, true),
                'author' => $faker->name()
            ]);
        }
    }
}
