<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Library;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $libraries = Library::all();

        foreach ($libraries as $library) { // Mỗi thư viện có 3 sách mẫu
            foreach (range(1, 3) as $index) {
                Book::create([
                    'library_id' => $library->id,
                    'title' => $faker->sentence,
                    'author' => $faker->name,
                    'publication_year' => $faker->year,
                    'genre' => $faker->word,
                ]);
            }
        }
    }
}