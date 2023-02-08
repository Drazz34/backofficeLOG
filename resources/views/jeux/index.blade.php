<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('List of all games')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (count($jeux) > 0)

                    <table class="table-auto border">

                        <thead>
                            <tr class="border">
                                <th class="p-5">ID</th>
                                <th class="p-5">TITRE</th>
                                <th class="p-5 mx-3 flex justify-between items-center">ACTIONS<a href="{{route('jeux.create')}}" class="btn-create">CREER</a></th>
                                
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($jeux->sortBy('id') as $jeu)

                            <tr class="border text-center">
                                <td class="p-5">{{$jeu->id}}</td>
                                <td class="p-5">{{$jeu->titre}}</td>
                                <td class="p-5">

                                    <a href="{{route('jeux.edit', $jeu->id)}}" class="btn-edit">Modifier</a>

                                    <a href="{{route('jeux.show', $jeu->id)}}" class="btn-show">Voir</a>

                                    <a href="#" class="btn-delete">Supprimer</a>
            
                                </td>
                                
                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                    @else

                    Je n'ai pas de jeux.

                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>