<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Saisir un nouveau tag
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="{{route('tags.store')}}" method="POST" class="w-full max-w-lg p-5 bg-white shadow-md">
                        @csrf
                        <div class="form-group">
                            <label for="nom" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nom</label>
                            <input type="text" name="nom" id="nom" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required >
                            @error('nom')
                            <div class="text-red-500">{{$message}}</div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">CREER</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>