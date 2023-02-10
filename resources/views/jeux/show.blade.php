<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Détails du jeu n° {{$jeu->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-bold text-2xl">{{$jeu->titre}}</h1>

                    <h3 class="text-xl">{{$categorie->libelle}}</h3>
                    
                    <p class="p-5">{{$jeu->description}}</p>

                    <div class="flex justify-end">
                        <a href="{{route('jeux.edit', $jeu->id)}}" class="btn-edit">Modifier</a>
                        <x-btn-supprimer :action="route('jeux.destroy', $jeu->id)"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>