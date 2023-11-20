<!-- resources/views/goats/edit.blade.php -->

@extends('layout')

@section('main')

<div class="container mx-auto mt-8 flex items-center justify-center">
    <div class="bg-white p-8 rounded-md shadow-md text-center max-w-md">
        <h1 class="text-2xl font-bold mb-4">Éditer la chèvre</h1>

        <form method="post" action="/goats/{{ $goat->id }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Nom</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md" value="{{ $goat->name }}">
            </div>

            <div class="mb-4">
                <label for="color" class="block text-sm font-medium text-gray-600">Couleur</label>
                <input type="text" id="color" name="color" class="mt-1 p-2 w-full border rounded-md" value="{{ $goat->color }}">
            </div>

            <div class="mb-4">
                <label for="birthday" class="block text-sm font-medium text-gray-600">Date de Naissance</label>
                <input type="date" id="birthday" name="birthday" class="mt-1 p-2 w-full border rounded-md" value="{{ $goat->birthday }}">
            </div>

            <div class="mb-4 flex items-center justify-center">
                <label for="sex" class="flex items-center">
                    <input type="checkbox" id="sex" name="sex" class="mr-2" {{ $goat->sex ? 'checked' : '' }}>
                    <span class="text-sm font-medium text-gray-600">Sexe</span>
                </label>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-600">Prix</label>
                <input type="number" id="price" name="price" class="mt-1 p-2 w-full border rounded-md" value="{{ $goat->price }}">
            </div>

            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Valider
            </button>
        </form>
    </div>
</div>

@endsection
