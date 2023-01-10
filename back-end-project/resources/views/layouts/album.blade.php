<x-app-layout>
    <x-slot name="header">

        Vous visionnez l'album : <p class="font-bold text-[2rem]">{{$album->title}} </p>
    </x-slot>
    <div class="container mx-auto m-4 p-4">
        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">

        </div>


        @dump($movies)
    </div>
</x-app-layout>
