<!-- resources/views/goats/edit.blade.php -->

@extends('layout')

@section('main')

<h1>Éditer la chèvre</h1>

<form method="post" action="/goats/{{ $goat->id }}">
    @csrf
    @method('PUT')
    <input type="text" placeholder="nom" name="name" value="{{ $goat->name }}">
    <input type="text" placeholder="couleur" name="color" value="{{ $goat->color }}">
    <input type="date" placeholder="date de naissance" name="birthday" value="{{ $goat->birthday }}">
    <input type="checkbox" name="sex" {{ $goat->sex ? 'checked' : '' }}>
    <input type="number" placeholder="prix" name="price" value="{{ $goat->price }}">
    <button>Valider</button>
</form>

@endsection
