<table class="w-full bg-white border border-gray-300 rounded">
    <div class="mt-4 flex justify-center mb-4">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" title="Redirection sur le site de gestion/création">
            <a href="/goats">Accéder au site</a>
        </button>
    </div>
</table>


<table class="w-full bg-white border border-gray-300 rounded">
    <head>
        <tr>
            <x-th>ID</x-th>
            <x-th>Nom</x-th>
            <x-th>Couleur</x-th>
            <x-th>Prix</x-th>
            <x-th>Anniversaire</x-th>
            <x-th>Sexe</x-th>
        </tr>
    </head>
    <body>
        @foreach(Auth::user()->goats as $goat)
            <tr class="hover:bg-gray-50">
                <x-td>{{ $goat->id }}</x-td>
                <x-td>{{ $goat->name }}</x-td>
                <x-td>
                    <div class="flex items-center justify-center">
                        <div class="w-6 h-6 rounded-full" style="background-color: {{ $goat->color }};"></div>
                    </div>
                </x-td>
                <x-td>{{ $goat->price }}</x-td>
                <x-td>{{ $goat->birthday }}</x-td>
                <x-td>{{ $goat->sex }}</x-td>
            </tr>
        @endforeach
    </body>
</table>