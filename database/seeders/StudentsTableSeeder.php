<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) { 
            DB::table('students')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->date('Y-m-d', '-5 years'),
                'parent_phone' => $faker->numerify('##########'),
                'class_id' => $faker->numberBetween(1, 10), // Tham chiếu đến id của bảng classes
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

