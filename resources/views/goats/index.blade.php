@extends('layout')

@section('main')

<div class="mt-4 flex justify-center mb-4">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <a href="/goats/create">Créer une nouvelle chèvre</a>
    </button>
</div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nom
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Couleur
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Prix
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date_Naissance
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Photo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sexe
                    </th>
                </tr>
            </thead>
            <tbody>

            @foreach($goats as $goat)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                        {{ $goat->id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $goat->name }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="w-6 h-6 rounded-full" style="background-color: {{ $goat->color }};"></div>
                    </td>
                    <td class="px-6 py-4">
                        {{ $goat->price }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $goat->birthday }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $goat->image_path }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $goat->sex ? 'Femelle' : 'Male' }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="/goats/{{ $goat->id }}">Voir plus</a>
                    </td>
                </tr>
            @endforeach
            @endsection

            </tbody>
        </table>
    </div>