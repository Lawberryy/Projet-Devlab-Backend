<header class="flex border-b border-gray-800 justify-between px-3 md:px-6 bg-mid-blue-main">
    <a href="/"><img src="/img/logo-skyblue.png" alt="logo skyblue" class="w-20 md:w-32"></a>

    <div class="flex flex-row items-center">
        <div class="relative mt-3 md:mt-0">
            <!-- <div wire:initial-data="{&quot;id&quot;:&quot;nf3NquTDS70quIVSQP9l&quot;,&quot;name&quot;:&quot;search-dropdown&quot;,&quot;redirectTo&quot;:false,&quot;events&quot;:[],&quot;eventQueue&quot;:[],&quot;dispatchQueue&quot;:[],&quot;data&quot;:{&quot;search&quot;:&quot;&quot;},&quot;children&quot;:[],&quot;checksum&quot;:&quot;6ff16f2bd9092b18e1539ea00f5da20e1ae0d0c560690ff48f89b4e2950de2f3&quot;}" wire:id="nf3NquTDS70quIVSQP9l" class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false"> -->
            <input
                type="text"
                class="bg-gray-800 text-white text-sm rounded-full w-52 md:w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
                placeholder="Search a movie"
            >
            <div class="absolute top-0">
                <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
            </div>

            <!-- <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div> -->

        </div>
        @auth
        <div class="md:ml-4 mt-3 md:mt-0">
            <a href="{{ url('/albums') }}">
                <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
            </a>
        </div>
        @endauth

            @if (Route::has('login'))
                @auth
                <div>
                    <form method="POST" action="{{ route('logout') }}" class="bg-emerald-500">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>

                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline ml-5">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
            @endif
    </div>
</header>
