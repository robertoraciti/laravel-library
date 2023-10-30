<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Generator as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $book = new Book();

            $book->title = $faker->words(3, true);
            $book->author = $faker->name();
            $book->isbn = $faker->isbn13();
            // $book->genre = $faker->word();
            $book->plot = $faker->paragraph();
            $book->publishing_year = $faker->year();
            $book->pages = $faker->numberBetween(30, 900);
            $book->price = $faker->randomFloat(2, 5, 70);

            $book->save();
        }
    }
}