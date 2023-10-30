<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $_genres = ["Horror","Giallo","Avventura","Azione","Fantascienza","Romanzo Rosa", "Romanzo Storico","Thriller","Biografia"];

        foreach ($_genres as $_genre) {
            $genre = new Genre();
            $genre->name = $_genre;
            $genre->color = $faker->hexColor();
            $genre->save();
         }
    }
}