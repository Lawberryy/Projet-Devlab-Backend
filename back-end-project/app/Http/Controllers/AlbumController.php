<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\User;
use App\Models\AlbumMovies;


class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Album::create([
            'title' => $request->title,
        ]);
        return redirect()->route('albums.index');
    }

    public function showContent() {

        return $this->belongsTo(Album::class);
        return $this->hasMany(Album::class);


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $movies = AlbumMovies::where('album_id', $id)->get();

        foreach ($movies as $movie) {
            $response = Http::get('https://api.themoviedb.org/3/movie/' . $movie->movie_id . '?&api_key=4cce21b1f26a0bd20a4ffa0ac80880c&language=en-US')->json();
            $movie->title = $response['original_title'];
            $movie->poster_path = $response['poster_path'];
        }
        return view('layouts/album',[
            'album' => Album::where('id',$id)->get()[0],
            'movies' =>$movies,
        ]);

        @dump($movies);
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
    function destroy(Album $album)
    {
        $album->delete();

        return redirect()->back();
    }
}
