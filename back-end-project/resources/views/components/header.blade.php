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
        </form>
    </div>
        @auth

        <div class="md:ml-4 mt-3 md:mt-0 flex items-center">
            <a href="{{ url('/albums') }}">
                <img src="/img/log-in-icon.png" class="rounded-full w-8 h-8" alt="logo-user-account">
            </a>
        </div>
        @endauth

            @if (Route::has('login'))
                @auth
                <div class="flex items-center">
                    <form method="POST" action="{{ route('logout') }}" class="bg-orange-400">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>

                    @else

                        @if (Route::has('register'))
                            <div class="flex items-center">
                                <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline bg-emerald-500 p-1 sm:p-2 ">Login</a>
                            </div>
                            <div class="flex items-center">
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline bg-emerald-500 p-1 sm:p-2">Register</a>
                            </div>
                        @endif
                    @endauth
            @endif
    </div>
</header>
