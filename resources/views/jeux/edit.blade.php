<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier le jeu n° {{$jeu->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{route('jeux.update', $jeu->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="flex flex-col max-w-lg">
                            <label for="titre" class="py-3 font-bold">Titre</label>
                            <input type="text" name="titre" id="titre" value="{{$jeu->titre}}">
                            @error('titre')
                            <div class="text-red-500">{{$message}}</div>
                            @enderror
                        </div>



                        <div class="flex flex-col max-w-lg">
                            <label for="categorie" class="py-3 font-bold">Catégorie</label>
                            <select name="categorie" id="categorie">
                                <option value="">Sélectionnez une catégorie</option>
                                @foreach($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                                @endforeach
                            </select>
                            @error('categorie')
                            <div class="text-red-500">{{$message}}</div>
                            @enderror
                        </div>


                        <div class="flex flex-col max-w-lg">
                            <label for="description" class="py-3 font-bold">Description</label>
                            <textarea name="description" id="description">{{$jeu->description}}</textarea>
                            @error('description')
                            <div class="text-red-500">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="flex py-5">
                            <button type="submit" class="btn-edit">Sauvegarder</button>
                            <a href="#" class="btn-show" onclick="document.getElementById('titre').value='{{$jeu->titre}}'; document.getElementById('description').value='{{$jeu->description}}';">Annuler</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{route('jeux.attach', $jeu->id)}}" method="POST">
                        <!-- @method('PUT') -->
                        @csrf
                        <div>
                            <p class="font-bold">Liste des tags</p>
                            
                            <ul class="flex">
                                @foreach($jeu->tags as $tag)
                                <li class="m-2 text-xl bg-orange-200 p-2 rounded-lg">
                                    
                                    <a href="{{route('jeux.detach', [$jeu->id, $tag->id])}}">{{$tag->nom}}<svg fill="none" stroke="red" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="inline-block h-6 mb-2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                                </svg></a>
                                </li>
                                @endforeach
                            </ul>
                            
                        </div>
                        <div class="flex flex-col max-w-lg">
                            <label for="tag" class="py-3 font-bold">Nouveau tag</label>
                            <input type="text" name="tag" id="tag" placeholder="tag">
                            @error('tag')
                            <div class="text-red-500">{{$message}}</div>
                            @enderror
                            <button type="submit" class="btn-edit w-min">Ajouter</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>