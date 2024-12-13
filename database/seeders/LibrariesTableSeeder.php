<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Library;
use Faker\Factory as Faker;

class LibrariesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) { // 10 thư viện mẫu
            Library::create([
                'name' => $faker->company . ' Library',
                'address' => $faker->address,
                'contact_number' => $faker->phoneNumber,
            ]);
        }
    }
}