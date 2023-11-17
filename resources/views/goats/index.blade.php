@extends('layout')

@section('main')

<h1>Chèvres <a href="/goats/create">+</a></h1>

    <table>
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Couleur</td>
            <td>Prix</td>
            <td>Date_Naissance</td>
            <td>Photo</td>
            <td>Sexe</td>
        </tr>

    {{--@dump($goats)--}}
    @foreach($goats as $goat)
        <tr>
            <td>{{ $goat->id }}</td>
            <td>{{ $goat->name }}</td>
            <td>{{ $goat->color }}</td>
            <td>{{ $goat->price }}</td>
            <td>{{ $goat->birthday }}</td>
            <td>{{ $goat->image_path }}</td>
            <td>{{ $goat->sex ? 'Femelle' : 'Male' }}</td>
            <td><a href="/goats/{{ $goat->id }}">Voir plus</td>
        </tr>
    @endforeach
    </table>
    @endsection