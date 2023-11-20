@extends('layout')

@section('main')

<div class="container mx-auto mt-8 flex items-center justify-center">
    <div class="bg-white p-8 rounded-md shadow-md text-center max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Créer</h1>

        <form method="post" action="/goats" class="max-w-md mx-auto">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Nom</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="color" class="block text-sm font-medium text-gray-600">Couleur</label>
                <input type="text" id="color" name="color" class="mt-1 p-2 w-full border rounded-md">
                @error('color')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="birthday" class="block text-sm font-medium text-gray-600">Date de Naissance</label>
                <input type="date" id="birthday" name="birthday" class="mt-1 p-2 w-full border rounded-md">
                @error('birthday')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4 flex items-center justify-center">
                <label for="sex" class="flex items-center">
                    <input type="checkbox" id="sex" name="sex" class="mr-2">
                    <span class="text-sm font-medium text-gray-600">Sexe</span>
                </label>
            </div> 

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-600">Prix</label>
                <input type="number" id="price" name="price" class="mt-1 p-2 w-full border rounded-md">
                @error('price')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="user_id" class="block text-sm font-medium text-gray-600">User_Id</label>
                <select id="user_id" name="user_id" class="mt-1 p-2 w-full border rounded-md">
                    <option value="1" {{ old('user_id') == 1 ? 'selected' : '' }}>1</option>
                    <option value="2" {{ old('user_id') == 2 ? 'selected' : '' }}>2</option>
                </select>
                @error('user_id')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>            
            
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Valider
            </button>
        </form>
    </div>
</div>

@endsection
