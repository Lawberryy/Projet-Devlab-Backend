<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <title>Category page - SkyBlue Movie</title>
</head>
<body class="bg-mid-blue-main text-gray-50">

<!-- @dump($moviesByGenre);
@dump($genres); -->

<x-header></x-header>

<main>

    <div class="mt-4 grid grid-cols-[30%_70%] md:grid-cols-[18%_82%] pt-12">
        <div class="border-r-2 border-gray-800 col-start-1 col-end-2 text-center">
            <h2 class="uppercase font-bold text-md md:text-xl text-light-blue-main">Categories</h2>
            <div id="tags" class="flex flex-col gap-y-2 mt-6 sticky top-0 h-[1O0vh]">
                @foreach($genresArray as $genre)
                    <a href="{{ route('genre.movies.display', $genre['id']) }}"><span id="{{$genre['id']}}" class="tag cursor-pointer text-[15px]">{{$genre['name']}}</span></a>
                @endforeach
            </div>
        </div>

        <!-- div qui affiche la catégorie recherchée par l'utlisateur -->
        <div class="col-start-2 col-end-3 px-6 mb-10">
            <h2 id="title-popular" class="uppercase font-bold text-md md:text-xl text-light-blue-main">Movies matching the selected category</h2>
            <div id="div-by-default" class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach($moviesByGenre as $movie)
                    <div class="movie_card">
                        <a href="{{ route('movies.show', $movie['id']) }}"><img src="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}" alt="movie-poster"/></a>
                        <a href="{{ route('movies.show', $movie['id']) }}"><h3 class="text-light-blue-main text-xl hover:text-gray-50">{{$movie['title']}}</h3></a>

                        <div class="flex">
                            <span class="text-sm">{{$movie['release_date']}}</span>
                            <span class="mx-2">|</span>
                            <svg class="fill-current text-green-300 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                            <span class="text-green-300 text-sm ml-1">{{$movie['vote_average']}}/10</span>
                        </div>
                        <span class="text-sm">
                            @foreach($movie['genre_ids'] as $genre)
                                {{ $genres->get($genre) }} @if (!$loop->last), @endif
                                <!-- la condition if permet d'ajouter une virgule entre chaque genre (loop) -->
                            @endforeach
                        </span>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

</main>

<x-footer></x-footer>

</body>
</html>
