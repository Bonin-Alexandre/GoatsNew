@extends('layout')

@section('main')
    <div class="bg-red-500">
        <h1>Chèvre</h1>
        {{--@dump($goats)--}}
            <img src="/img/goats/{{$goat->image_path}}">
            <ul>
                <li>{{ $goat->id }}</li>
                <li>{{ $goat->name }}</li>
                <li>{{ $goat->color }}</li>
                <li>{{ $goat->price }}</li>
                <li>{{ $goat->birthday }}</li>
                <li>{{ $goat->sex ? 'Femelle' : 'Male' }}</li>
                <li>Propriétaire : {{ $goat->owner->name }}</li>
            </ul>

    </div>

@endsection


@extends('layout')

@section('main')
    <div class="bg-red-500 p-8">
        <h1 class="text-3xl font-bold text-white mb-4">Chèvre</h1>
        
        <img class="w-full max-w-lg mb-4" src="/img/goats/{{ $goat->image_path }}" alt="{{ $goat->name }}">

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
@endsection
