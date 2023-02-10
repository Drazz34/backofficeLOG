<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste de tous les tags
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (count($tags) > 0)

                    <table class="table-auto border">

                        <thead>
                            <tr class="border">
                                <th class="p-5">ID</th>
                                <th class="p-5">NOM</th>
                                <th class="p-5 mx-3 flex justify-between items-center">ACTIONS<x-btn-creer><a href="{{route('tags.create')}}">CREER</a></x-btn-creer></th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($tags as $tag)

                            <tr class="border text-center">
                                <td class="p-5">{{$tag->id}}</td>
                                <td class="p-5">{{$tag->nom}}</td>
                                <td class="p-5">

                                    <!-- lien Modifier -->
                                    @component('components.btn-modele')
                                    @slot('route')
                                    {{route('tags.edit', $tag->id)}}
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
                                    {{route('tags.show', $tag->id)}}
                                    @endslot
                                    @slot('class')
                                    text-black bg-gray-200 hover:bg-gray-400 focus:bg-gray-400;
                                    @endslot
                                    @slot('title')
                                    Voir
                                    @endslot
                                    @endcomponent


                                    <!-- lien Supprimer -->
                                    @component('components.btn-modele')
                                    @slot('route')
                                    #
                                    @endslot
                                    @slot('class')
                                    text-white bg-red-600 hover:bg-red-800 focus:bg-red-800;
                                    @endslot
                                    @slot('title')
                                    Supprimer
                                    @endslot
                                    @endcomponent

                                </td>

                            </tr>

                            @endforeach

                        </tbody>

                    </table>

                    @else

                    Il n'y a pas de tag.

                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>