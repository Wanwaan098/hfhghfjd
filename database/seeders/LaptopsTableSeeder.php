<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LaptopsTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Lấy danh sách renter IDs từ bảng renters
        $renterIds = DB::table('renters')->pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            DB::table('laptops')->insert([
                'brand' => $faker->randomElement(['Dell', 'HP', 'Lenovo', 'Asus', 'Acer']),
                'model' => $faker->word . ' ' . $faker->randomNumber(3),
                'specifications' => $faker->sentence,
                'rental_status' => $faker->boolean,
                'renter_id' => $faker->randomElement($renterIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
