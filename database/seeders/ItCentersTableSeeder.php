<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ItCentersTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('it_centers')->insert([
                'name' => $faker->company . ' IT Center',
                'location' => $faker->address,
                'contact_email' => $faker->unique()->companyEmail,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
