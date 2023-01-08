<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')
    <title>Homepage - SkyBlue Movie</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-mid-blue-main">

<!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
@auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
    @endauth
    </div>
@endif -->


<x-header></x-header>

<main class="text-gray-50 mt-12">
    <h1 class="text-center uppercase font-bold text-4xl">Welcome to Skyblue Movie</h1>

    <div class="mt-4 grid grid-cols-[30%_70%] md:grid-cols-[18%_82%] pt-12">
        <div class="border-r-2 border-gray-800 col-start-1 col-end-2 text-center">
            <h2 class="uppercase font-bold text-md md:text-xl text-light-blue-main">Categories</h2>
            <div class="flex flex-col gap-y-2 mt-6 sticky top-0 h-[1O0vh]">
                @foreach($genresArray as $genre)
                    <span class="cursor-pointer text-[15px]">{{$genre['name']}}</span>
                @endforeach

            </div>
        </div>

        <div class="movies_container col-start-2 col-end-3 px-6 mb-10">
            <h2 class="uppercase font-bold text-md md:text-xl text-light-blue-main">Popular movies</h2>
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                @foreach($popular as $popularMovie)
                    <div class="movie_container">
                        <a href="{{ route('movies.show', $popularMovie['id']) }}"><img src="https://image.tmdb.org/t/p/w500{{$popularMovie['poster_path']}}" alt="movie-poster"/></a>
                        <a href="{{ route('movies.show', $popularMovie['id']) }}"><h3 class="text-light-blue-main text-xl hover:text-gray-50">{{$popularMovie['title']}}</h3></a>
                        <!-- <h4 class="font-bold">{{$popularMovie['original_title']}}</h4> -->
                        <!-- <p>{{$popularMovie['overview']}}</p> -->
                        <div class="flex">
                            <span class="text-sm">{{$popularMovie['release_date']}}</span>
                            <span class="mx-2">|</span>
                            <svg class="fill-current text-green-300 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                            <span class="text-green-300 text-sm ml-1">{{$popularMovie['vote_average']}}/10</span>
                        </div>
                        <span class="text-sm">
                                    @foreach($popularMovie['genre_ids'] as $genre)
                                {{ $genres->get($genre) }} @if (!$loop->last), @endif
                                <!-- la condition if permet d'ajouter une virgule entre chaque genre -->
                            @endforeach
                                </span>
                        @auth
                            <form action="#">
                                <label>AJouter à l'album</label>
                                <select name="album" class="bg-emerald-500">
                                    <option value="visionne">Visionnés</option>
                                    <option value="envie">Liste d'envie</option>
                                </select>
                                <!-- <input type="submit" value="Envoyer" /> -->
                            </form>
                        @endauth
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

<x-footer></x-footer>
</body>
</html>
