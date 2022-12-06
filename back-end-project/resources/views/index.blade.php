<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <h1>Movie</h1>

    @dump($movies)
    @foreach($movies as $movie)
        <div class="movies_container">
            <h1>{{$movie['title']}}</h1>
            <h2 class="font-bold text-amber-600">{{$movie['original_title']}}</h2>
            <img src="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}"/>
            <p>{{$movie['overview']}}</p>
            <p>{{$movie['release_date']}}</p>
        </div>
    @endforeach


    @dump($popular)
    @foreach($popular as $popularMovie)
        <h1>{{$popularMovie['title']}}</h1>
        <img src="https://image.tmdb.org/t/p/w500{{$popularMovie['poster_path']}}"/>
        <p>{{$popularMovie['release_date']}}</p>
    @endforeach
</body>
</html>
