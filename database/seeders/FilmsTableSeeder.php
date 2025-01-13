<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $films = [
            ['title' => 'Inception', 'description' => 'A thief who steals corporate secrets through dream-sharing technology.', 'release_date' => '2010-07-16'],
            ['title' => 'The Matrix', 'description' => 'A computer hacker learns about the true nature of his reality.', 'release_date' => '1999-03-31'],
            ['title' => 'The Dark Knight', 'description' => 'Batman faces the Joker in Gotham City.', 'release_date' => '2008-07-18'],
            ['title' => 'Pulp Fiction', 'description' => 'The lives of two hitmen intertwine in Los Angeles.', 'release_date' => '1994-10-14'],
            ['title' => 'Interstellar', 'description' => 'A team of explorers travels through a wormhole in space.', 'release_date' => '2014-11-07'],
        ];

        foreach ($films as $film) {
            Film::create($film);
        }
    }
}
