@extends('layout')

@section('main')

<h1>Créer</h1>

<form method="post" action="/goats">
    @csrf
    <input type="text" placeholder="nom" name="name">
    <input type="text" placeholder="couleur" name="color">
    <input type="date" placeholder="date de naissance" name="birthday">
    <input type="checkbox" placeholder="sex" name="sex">
    <input type="number" placeholder="prix" name="price">
    <button>Valider</button>
</form>
@endsection