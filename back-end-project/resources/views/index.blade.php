
<h1>Test</h1>

@dump($movies)
@foreach($movies as $movie)
    <div class="movies_container">
        <h1>{{$movie['title']}}</h1>
        <h2>{{$movie['original_title']}}</h2>
        <img src="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}"/>
        <p>{{$movie['overview']}}</p>
        <p>{{$movie['release_date']}}</p>
    </div>
@endforeach
<?php
print_r($movies)
?>

<style>
    .movies_container{
        background-color: #4a5568;
    }
</style>
