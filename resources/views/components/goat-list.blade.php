<table class="w-full bg-white border border-gray-300 rounded">
    <head class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <x-th>
                Id
            </x-th>
            <x-th>
                Nom
            </x-th>
            <x-th>
                Couleur
            </x-th>
            <x-th>
                Prix
            </x-th>
            <x-th>
                Anniversaire
            </x-th>
            <x-th>
                Sexe
            </x-th>
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
                <x-td>{{ $goat->sex ? 'Femelle' : 'Male' }}</x-td>
            </tr>
        @endforeach
    </body>
</table>