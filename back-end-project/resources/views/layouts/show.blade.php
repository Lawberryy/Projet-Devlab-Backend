<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <title>{{ $movie['title'] }} - SkyBlue Movie</title>
</head>
<body class="bg-mid-blue-main text-gray-50">

    <x-header></x-header>

        <div class="movie-info mt-14 grid grid-cols-1 md:grid-cols-[30%_70%] pb-16">
            <div class="px-6">
                <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path'] }}" alt="movie-poster" class="w-[100%] sm:w-[70%] md:w-[100%]">
            </div>
            <div class="pr-6 pl-10">
                <h1 class="font-bold text-light-blue-main uppercase text-3xl">{{ $movie['title'] }}</h1>
                <div class="flex mt-2">
                    <div class="flex">
                        <svg class="fill-current text-green-300 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
                        <span class="text-green-300 text-sm ml-1">{{ $movie['vote_average'] }}/10</span>
                    </div>
                    <span class="mx-2">|</span>
                    <div class="text-sm">
                        @foreach($movie['genres'] as $genre)
                            <span>{{ $genre['name'] }} @if (!$loop->last), @endif</span>
                                <!-- la condition if permet d'ajouter une virgule entre chaque genre -->
                        @endforeach
                    </div>
                    <span class="mx-2">|</span>
                    <span class="text-sm">{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                </div>
                <h2 class="font-bold mt-4">Original name: <span>"{{ $movie['original_title'] }}"</span></h2>
                <p class="text-justify mt-16">{{ $movie['overview'] }}</p>

                <div>
                    <h2 class="font-bold mt-12">Crew:</h2>
                    <div class="flex flex-wrap mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if($loop->index < 6)
                                <!-- permet de limiter le nbre de loop à 6 -->
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    <div class="movie-cast px-6 pb-10">
        <h2 class="font-bold text-xl mb-6">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5">
            @foreach ($movie['credits']['cast'] as $cast)
                @if($loop->index < 5)
                    <!-- permet de limiter le nombre de loop à 5, càd les 5 premiers actors -->
                    <div class="">
                        <img src="https://image.tmdb.org/t/p/w500{{ $cast['profile_path']}}" alt="actor">
                        <div class="mt-2">
                            <span class="text-lg mt-2 hover:text-gray:300">{{ $cast['name'] }}</span><br>
                            <span class="text-sm text-gray-400">{{ $cast['character'] }}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <x-footer></x-footer>

</body>
</html>
