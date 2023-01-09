<header class="flex border-b border-gray-800 justify-between px-3 md:px-6 bg-mid-blue-main">
    <a href="/"><img src="/img/logo-skyblue.png" alt="logo skyblue" class="w-20 md:w-32"></a>

    <div class="flex flex-row items-center">
        <form id="SearchBar" class="relative mt-3 md:mt-0">

            <input
                type="text"
                id="search"
                class="bg-gray-800 text-white text-sm rounded-full w-52 md:w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
                placeholder="Search a movie"
            >
            <div class="absolute top-0">
                <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
            </div>

            <!-- <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div> -->

        </form>
        <div class="md:ml-4 mt-3 md:mt-0">
            <a href="#">
                <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
            </a>
        </div>
    </div>
</header>
