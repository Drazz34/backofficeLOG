<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier le tag n° {{$tag->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="" method="">

                        <div class="flex flex-col max-w-lg">
                            <label for="nom" class="py-3 font-bold">Nom</label>
                            <input type="text" name="nom" id="nom" value="{{$tag->nom}}">
                        </div>

                        <div class="flex py-5">
                            <a href="#" class="btn-edit">Sauvegarder</a>
                            <a href="#" class="btn-show" onclick="document.getElementById('nom').value='{{$tag->nom}}';">Annuler</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>