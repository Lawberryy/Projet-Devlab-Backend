<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumMovies extends Model
{
    use HasFactory;

    protected $table = "albums_movies";

    //protected $fillable = ['album_id', 'movie_id'];

    function albums(){
        return $this->belongsToMany(Album::class);
    }

}


