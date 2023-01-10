<x-app-layout>
    <x-slot name="header">
        Faire un album
    </x-slot>
    <div class="container mx-auto m-4 p-4">
        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
            <form method="post" action="{{route('albums.store')}}">
                @csrf
                <div class="sm:col-span-6">
                    <label for="title" class="block text-sm font-medium text-gray-700"> Nom de l'album </label>
                    <div class="mt-1">
                        <input required type="text" id="title" wire:model.lazy="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    <!-- <div class="mt-4">
                        <label for="public" class="block text-sm font-medium text-gray-700">L'album est-il public ou privé ?</label>
                        <select name="public" id="album_status">
                            <option value="public">Public</option>
                            <option value="private">Privé</option>
                        </select>
                    </div> -->
                    <div class="flex gap-x-2 mt-4">
                        <input type="checkbox">
                        <label for="public" class="block text-sm font-medium text-gray-700">L'album est privé </label>
                    </div>
                </div>
                <button type="submit" class="mt-6 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-light-blue-main hover:bg-darker-blue-main focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'">Créer l'album</button>
            </form>
        </div>

    </div>
</x-app-layout>
