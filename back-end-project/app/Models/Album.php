<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = "albums";

    protected $fillable = ['title', 'user_id'];


    public function movies(){
        return $this->belongsToMany(AlbumMovies::class);
    }
}
