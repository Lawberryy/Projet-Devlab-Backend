<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function show($genre){
        $genres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=4cce21b1f26a0bd20a4ffa0ac80880c8&language=en-US');
        $genres = $genres->json()['genres'];

    }
}
