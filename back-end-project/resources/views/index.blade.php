<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <title>Sky Blue Movies</title>
</head>
<body>
    <h1 class="font-bold text-[5rem] text-center">Sky Blue Movies</h1>

    <div class="flex flex-wrap justify-between">
    <!-- @dump($movies) -->
    @foreach($movies as $movie)
        <div class="card bg-gray-200 w-[19%] gap-4 mb-4">
            <h2 class="font-bold text-[2rem]">Titre du film : {{$movie['title']}}</h2>
            <h2 class="font-bold text-amber-600 text-[2rem]">Titre original : {{$movie['original_title']}}</h2>
            <img class="w-[100%] h-auto" src="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}"/>
            <!-- <p>{{$movie['overview']}}</p> -->
            <p class="font-bold">Date de sortie : {{$movie['release_date']}}</p>
        </div>
    @endforeach
    </div>

    <?php

    ?>
</body>
</html>
