<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Détails de la catégorie n° {{$categorie->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-bold text-2xl">{{$categorie->libelle}}</h1>
                    
                    <p class="p-5">Liste de tous les jeux de cette catégorie</p>

                    <p>

                        <ul>
                        @foreach ($jeux as $jeu)

                        <li class="p-1">- <a href="{{route('jeux.show', $jeu->id)}}">{{$jeu->titre}}</a></li>

                        @endforeach
                        </ul>

                    </p>

                    <div class="flex justify-end">
                        <a href="{{route('categories.edit', $categorie->id)}}" class="btn-edit">Modifier</a>
                        <x-btn-supprimer :action="route('categories.destroy', $categorie->id)"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>