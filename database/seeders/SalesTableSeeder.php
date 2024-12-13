<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SalesTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('sales')->insert([
                'medicine_id' => $faker->numberBetween(1, 50), // Tham chiếu đến ID trong bảng medicines
                'quantity' => $faker->numberBetween(1, 20),
                'sale_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'customer_phone' => $faker->optional()->numerify('0#########'), // Số điện thoại ngẫu nhiên hoặc null
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
