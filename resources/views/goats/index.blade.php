@extends('layout')

@section('main')

<div class="mt-4 flex justify-center mb-4">
    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mr-4">
        <a href="/dashboard">Accéder au dashboard</a>
    </button>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-4">
        <a href="/goats/create">Créer une nouvelle chèvre</a>
    </button>
</div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Nom
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Couleur
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Prix
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Date_Naissance
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Photo
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Sexe
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Détails d'une chèvre
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Supprimer une chèvre
                    </th>
                </tr>
            </thead>
            <tbody>

            @foreach($goats as $goat)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4 text-center">
                        {{ $goat->id }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{ $goat->name }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <div class="inline-block w-6 h-6 rounded-full" style="background-color: {{ $goat->color }};"></div>
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{ $goat->price }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{ $goat->birthday }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{ $goat->image_path }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        {{ $goat->sex ? 'Femelle' : 'Male' }}
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="/goats/{{ $goat->id }}">Voir plus</a>
                    </td>
                    <td class="px-6 py-4 text-center">
                    <form method="post" action="/goats/{{ $goat->id }}" class="mt-4">
                        @csrf
                        @method('DELETE')
                    
                        <button type="submit"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette chèvre ?')"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Supprimer
                        </button>
                    </form>  
                    </td>                  
                </tr>
            @endforeach
            @endsection

            </tbody>
        </table>
    </div>