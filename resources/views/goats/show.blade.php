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
            </ul>

        <form method="post" action="/goats/{{ $goat->id }}" style="margin-top: 10px;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette chèvre ?')">Supprimer</button>
        </form>
    </div>

@endsection