<x-app-layout>
    <x-slot name="header">Albums</x-slot>
    <div class="container mx-auto lg:p-16 sm:p-2">
        <div>
            <a href="{{route('albums.create')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-light-blue-main hover:bg-darker-blue-main focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mb-2">Nouvel album +</a>
        </div>
        <div>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-white">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Id</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">Nom de l'album</th>
                                <th scope="col" class="relative px-6 py-3 text-xs font-medium text-black uppercase tracking-wide">Edit</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($albums as $album)
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{$album->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="/albums/{{$album->id}}">{{$album->title}}</a>
                                </td>
                                    <td class="flex justify-center">
                                    <form method="POST" action="{{route('albums.destroy', $album->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-light-blue-main hover:bg-darker-blue-main focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'">Supprimer</button>

                                    </form>
                                    </td>
                                </tr>
                            @endforeach

                            <!-- More items... -->
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
