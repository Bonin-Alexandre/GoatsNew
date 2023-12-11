<x-app-layout>
    <x-slot name="header">
        <table class="w-full bg-white border border-gray-300 rounded">
            <div class="mt-1 flex justify-center mb-1">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" title="Redirection sur le site de gestion/création">
                    <a href="/goats">Accéder au site</a>
                </button>
            </div>
        </table>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-goat-list />
                <!--<x-welcome />-->
            </div>
        </div>

</x-app-layout>
