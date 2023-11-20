@extends('layout')

@section('main')
    <div class="flex items-center justify-center h-screen">
        <div class="bg-red-500 p-8 rounded-lg shadow-md">
            
            <div class="relative mb-4 overflow-hidden rounded-md">
                <img class="w-full max-w-lg" src="/img/goats/{{ $goat->image_path }}" alt="{{ $goat->name }}">
                <div class="absolute inset-0 bg-black opacity-40"></div>
            </div>

            <ul class="text-white">
                <li><span class="font-bold">ID:</span> {{ $goat->id }}</li>
                <li><span class="font-bold">Nom:</span> {{ $goat->name }}</li>
                <li><span class="font-bold">Couleur:</span> {{ $goat->color }}</li>
                <li><span class="font-bold">Prix:</span> {{ $goat->price }}</li>
                <li><span class="font-bold">Date de naissance:</span> {{ $goat->birthday }}</li>
                <li><span class="font-bold">Sexe:</span> {{ $goat->sex ? 'Femelle' : 'Mâle' }}</li>
                <li><span class="font-bold">Propriétaire:</span> {{ $goat->owner->name }}</li>
            </ul>
        </div>
    </div>
@endsection
