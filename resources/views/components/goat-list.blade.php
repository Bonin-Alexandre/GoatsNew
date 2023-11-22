<table class="w-full bg-white border border-gray-300 rounded">
    <head>
        <tr>
            <x-th>ID</x-th>
            <x-th>Nom</x-th>
            <x-th>Couleur</x-th>
            <x-th>Prix</x-th>
            <x-th>Anniversaire</x-th>
            <x-th>Sexe</x-th>
            <x-th>Plus d'infos</x-th>
        </tr>
    </head>
    <body>
        @foreach(Auth::user()->goats as $goat)
            <tr class="hover:bg-gray-50">
                <x-td>{{ $goat->id }}</x-td>
                <x-td>{{ $goat->name }}</x-td>
                <x-td>{{ $goat->color }}</x-td>
                <x-td>{{ $goat->price }}</x-td>
                <x-td>{{ $goat->birthday }}</x-td>
                <x-td>{{ $goat->sex }}</x-td>
                <x-td><a href="/goats/{{ $goat->id }}">Voir plus</a></x-td>
            </tr>
        @endforeach
    </body>
</table>