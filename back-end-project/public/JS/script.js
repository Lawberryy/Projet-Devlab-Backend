// Homepage
/*
const base_URL = 'https://api.themoviedb.org/3';
const API_key = 'api_key=4cce21b1f26a0bd20a4ffa0ac80880c8';
const API_URL = base_URL + '/discover/movie?&language=en-US&sort_by=popularity.desc&' + API_key;
const search_URL = base_URL + '/search/movie?' + API_key;
const img_URL = 'https://image.tmdb.org/t/p/w500';

const main = document.getElementById('movies_container');
const searchBar = document.getElementById('SearchBar');
const search = document.getElementById('search');


callMovies(API_URL);

function callMovies(url) {
    fetch(url).then(res => res.json()).then(data => {
        console.log(data.results);
        displayMovies(data.results);
    })
}

function displayMovies(data) {
    main.innerHTML = ''; // la section main est vide au commencement de la fonction

    const divMoviesByGenre = document.createElement('div');
    divMoviesByGenre.classList.add('div-movies-by-genre');
    main.appendChild(divMoviesByGenre);

    const titleGenre = document.createElement('h2');
    titleGenre.innerHTML = 'Movies matching this genre: ';
    titleGenre.classList.add('uppercase', 'font-bold', 'text-md', 'md:text-xl', 'text-light-blue-main');
    divMoviesByGenre.appendChild(titleGenre);

    const divMovies = document.createElement('div');
    divMovies.classList.add('mt-8', 'grid', 'grid-cols-1', 'sm:grid-cols-2', 'md:grid-cols-3', 'lg:grid-cols-4', 'gap-5');
    divMoviesByGenre.appendChild(divMovies);


    // loop création des cards individuelle
    data.forEach(movie => { // boucle : pour chaque paramètre movie
        const {id, title, poster_path, release_date, vote_average, genre_ids} = movie;
        const movieCard = document.createElement('div');
        movieCard.classList.add('movie');
        movieCard.innerHTML = `
            <a href="/movies/${id}"><img src="${img_URL+poster_path}" alt="movie-poster"/></a>
            <a href="/movies/${id}"><h3 class="text-light-blue-main text-xl hover:text-gray-50">${title}</h3></a>

            <div class="flex">
            <span class="text-sm">${release_date}</span>
            <span class="mx-2">|</span>
            <svg class="fill-current text-green-300 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg>
            <span class="text-green-300 text-sm ml-1">${vote_average}/10</span>
            </div>
            <span class="text-sm">
                <!-- @foreach($popularMovie['genre_ids'] as $genre)
                {{ $genres->get($genre) }} @if (!$loop->last), @endif -->
                <!-- la condition if permet d'ajouter une virgule entre chaque genre (loop) -->
                <!-- @endforeach -->
                ${genre_ids}
            </span>
        `

        divMovies.appendChild(movieCard);
    })
}


const popByDefault = document.getElementById('div-by-default');
const titleByDefault = document.getElementById('title-popular');

searchBar.addEventListener('submit', (e) => {
    e.preventDefault();
    const searchContent = search.value;

    popByDefault.classList.add('hidden');
    titleByDefault.classList.add('hidden');

    const divSearch = document.createElement('div');
    divSearch.classList.add('div-search');
    const titleSearch = document.createElement('h2');
    titleSearch.innerHTML = 'Results for ' + searchContent;
    titleSearch.classList.add('uppercase', 'font-bold', 'text-md', 'md:text-xl', 'text-light-blue-main');
    divSearch.appendChild(titleSearch);
    main.appendChild(divSearch);


    if(searchContent) {
        const divMoviesByGenreBis = document.getElementsByClassName('div-movies-by-genre');
        divMoviesByGenreBis.classList.remove('hidden');

        callMovies(search_URL + '&query=' + searchContent);
    }
    else {
        divSearch.innerHTML = `
        <div class="flex flex-col items-center mt-12">
            <img class="w-20 h-auto" src="/img/not-like-this.png" alt="img-not-like-this">
            <span class="text-center text-xl mt-4">Your search request is empty. Please try again</span>
        </div>
        `
    }
}) */
