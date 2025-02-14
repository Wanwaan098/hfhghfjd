<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CinemasTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Tạo 10 rạp chiếu
            DB::table('cinemas')->insert([
                'name' => $faker->company . ' Cinema',
                'location' => $faker->address,
                'total_seats' => $faker->numberBetween(50, 500),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
