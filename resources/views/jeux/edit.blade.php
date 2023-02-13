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
                            <p><ul class="flex">
                                @foreach($jeu->tags as $tag)
                                <li class="m-2 text-xl bg-orange-200 max-w-min p-2 rounded-lg"><a href="{{route('tags.show', $tag->id)}}">{{$tag->nom}}</a></li>
                                @endforeach
                            </ul></p>
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