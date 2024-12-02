<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = [
            ['naam' => 'Inception', 'jaar' => 2010, 'genre' => 'Science Fiction'],
            ['naam' => 'The Godfather', 'jaar' => 1972, 'genre' => 'Drama'],
            ['naam' => 'The Dark Knight', 'jaar' => 2008, 'genre' => 'Actie'],
            ['naam' => 'Pulp Fiction', 'jaar' => 1994, 'genre' => 'Misdaad'],
        ];

        return view('films.index', [
        'films' => $films,
        'titel' => 'Films'

    ]);
    }
}
