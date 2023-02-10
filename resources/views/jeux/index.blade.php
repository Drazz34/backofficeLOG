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
                                <th class="p-5 mx-3 flex justify-between items-center">ACTIONS<x-btn-creer><a href="{{route('jeux.create')}}">CREER</a></x-btn-creer></th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($jeux->sortBy('id') as $jeu)

                            <tr class="border text-center">
                                <td class="p-5">{{$jeu->id}}</td>
                                <td class="p-5">{{$jeu->titre}}</td>
                                <td class="p-5">

                                <!-- lien Modifier -->
                                    @component('components.btn-modele')
                                    @slot('route')
                                    {{route('jeux.edit', $jeu->id)}}
                                    @endslot
                                    @slot('class')
                                    text-white bg-blue-600 hover:bg-blue-800 focus:bg-blue-800;
                                    @endslot
                                    @slot('title')
                                    Modifier
                                    @endslot
                                    @endcomponent

                                <!-- lien Voir -->
                                    @component('components.btn-modele')
                                    @slot('route')
                                    {{route('jeux.show', $jeu->id)}}
                                    @endslot
                                    @slot('class')
                                    text-black bg-gray-200 hover:bg-gray-400 focus:bg-gray-400;
                                    @endslot
                                    @slot('title')
                                    Voir
                                    @endslot
                                    @endcomponent

                                    <x-btn-supprimer :action="route('jeux.destroy', $jeu->id)"/>
                                    

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