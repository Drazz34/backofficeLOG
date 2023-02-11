<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier la catégorie n° {{$categorie->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{route('categories.update', $categorie->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="flex flex-col max-w-lg">
                            <label for="libelle" class="py-3 font-bold">Libellé</label>
                            <input type="text" name="libelle" id="libelle" value="{{$categorie->libelle}}">
                            @error('libelle')
                            <div class="text-red-500">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="flex py-5">
                            <button type="submit" class="btn-edit">Sauvegarder</button>
                            <a href="#" class="btn-show" onclick="document.getElementById('libelle').value='{{$categorie->libelle}}';">Annuler</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>