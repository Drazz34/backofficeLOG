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
                            <label for="description" class="py-3 font-bold">Description</label>
                            <textarea name="description" id="description">{{$jeu->description}}</textarea>
                            @error('description')
                            <div class="text-red-500">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="flex py-5">
                            <button type="submit" class="btn-edit">Sauvegarder</button>
                            <a href="#" class="btn-show" onclick="document.getElementById('titre').value='{{$jeu->titre}}';">Annuler</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>