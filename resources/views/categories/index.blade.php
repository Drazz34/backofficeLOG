<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des catégories
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (count($categories) > 0)

                    <table class="table-auto border">

                        <thead>
                            <tr class="border">
                                <th class="p-5">ID</th>
                                <th class="p-5">LIBELLE</th>
                                <th class="p-5 mx-3 flex justify-between items-center">ACTIONS<a href="{{route('categories.create')}}" class="btn-create">CREER</a></th>
                                
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($categories->sortBy('id') as $categorie)

                            <tr class="border text-center">
                                <td class="p-5">{{$categorie->id}}</td>
                                <td class="p-5">{{$categorie->libelle}}</td>
                                <td class="p-5">

                                    <a href="{{route('categories.edit', $categorie->id)}}" class="btn-edit">Modifier</a>

                                    <a href="{{route('categories.show', $categorie->id)}}" class="btn-show">Voir</a>

                                    <a href="#" class="btn-delete">Supprimer</a>
            
                                </td>
                                
                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                    @else

                    Il n'y a pas de catégorie.

                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>