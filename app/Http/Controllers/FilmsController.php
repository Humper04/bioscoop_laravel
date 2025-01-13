<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmsController extends Controller
{
    public function index()
    {
        $films = Film::all(); // Haalt alle films op
        return view('films.index', compact('films'));
    }
    public function show($id)
    {
        $film = Film::find($id);
        return view('films.show', compact('film'));
    }
}
