<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MoviesTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) { // Tạo 100 bộ phim
            DB::table('movies')->insert([
                'title' => $faker->sentence(3), // Tên phim giả lập
                'director' => $faker->name, // Tên đạo diễn
                'release_date' => $faker->date(),
                'duration' => $faker->numberBetween(90, 200), // Thời lượng phim
                'cinema_id' => $faker->numberBetween(1, 10), // Tham chiếu đến rạp (giả sử có 10 rạp)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
