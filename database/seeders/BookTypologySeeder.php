<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class BookTypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $_books = Book::all();

        $_typologies = Typology::all()->pluck('id')->toArray();

        foreach ($_books as $_book) {
            $_book
                ->typologies()
                ->attach($faker->randomElements($_typologies, random_int(0, 2)));
        }
    }
}