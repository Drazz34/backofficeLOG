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
                    <h1 class="font-bold text-2xl mb-5">{{$jeu->titre}}</h1>

                    <div class="flex">
                        <a href="{{route('categories.show', $categorie->id)}}" class="text-xl m-2 bg-green-300 p-2 rounded-lg">{{$categorie->libelle}}</a>

                        <h3>
                            <ul class="flex">
                                @foreach($jeu->tags as $tag)
                                <li class="m-2 text-xl bg-orange-200 max-w-min p-2 rounded-lg"><a href="{{route('tags.show', $tag->id)}}">{{$tag->nom}}</a></li>
                                @endforeach
                            </ul>
                        </h3>

                    </div>


                    <p class="p-5">{{$jeu->description}}</p>

                    <div class="flex justify-end">
                        <a href="{{route('jeux.edit', $jeu->id)}}" class="btn-edit">Modifier</a>
                        <x-btn-supprimer :action="route('jeux.destroy', $jeu->id)" />
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>