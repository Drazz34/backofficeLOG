<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Saisir une nouvelle catégorie
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form action="" method="" class="w-full max-w-lg p-5 bg-white shadow-md">
                        @csrf
                        <div class="form-group">
                            <label for="libelle" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Libellé</label>
                            <input type="text" name="libelle" id="libelle" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required >
                        </div>
                        <div class="form-group">
                            <label for="description" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Description</label>
                            <textarea name="description" id="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required></textarea>
                        </div>
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">CREER</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>