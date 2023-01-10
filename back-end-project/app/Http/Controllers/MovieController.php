<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $topRated = Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key=4cce21b1f26a0bd20a4ffa0ac80880c8&language=en-US&page=1');
        $popular = Http::get('https://api.themoviedb.org/3/discover/movie?api_key=4cce21b1f26a0bd20a4ffa0ac80880c8&language=en-US&sort_by=popularity.desc');
        $genresArray = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=4cce21b1f26a0bd20a4ffa0ac80880c8&language=en-US');

        $topRated = $topRated->json()['results'];
        $popular = $popular->json()['results'];
        $genresArray = $genresArray->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        //dump($popular);

        return view('welcome', [
            'movies' => $topRated,
            'popular' => $popular,
            'genresArray' => $genresArray,
            'genres' => $genres,
        ]);
        
    }

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public
function create()
{
    //
}

/**
 * Store a newly created resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\Response
 */
public
function store(Request $request)
{
    //
}

/**
 * Display the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    $movie = Http::get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos'.'&api_key=4cce21b1f26a0bd20a4ffa0ac80880c8&language=en-US&page=1');
    $movie = $movie->json();

    //dump($movie);


    return view('layouts/show', [
        'movie' => $movie,
    ]);
}

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function display($id)
    {
        $moviesByGenre = Http::get('https://api.themoviedb.org/3/discover/movie?language=en-US&sort_by=popularity.desc&with_genres='.$id.'&api_key=4cce21b1f26a0bd20a4ffa0ac80880c8&');
        $moviesByGenre = $moviesByGenre->json('results');

        $genresArray = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=4cce21b1f26a0bd20a4ffa0ac80880c8&language=en-US');
        $genresArray = $genresArray->json('genres');

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });


        return view('layouts/discover', [
            'moviesByGenre' => $moviesByGenre,
            'genresArray' => $genresArray,
            'genres' => $genres,
        ]);
    }


/**
 * Show the form for editing the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function edit($id)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function update(Request $request, $id)
{
    //
}

/**
 * Remove the specified resource from storage.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function destroy($id)
{
    //
}
}
