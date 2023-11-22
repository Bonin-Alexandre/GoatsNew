<div>
    <input wire:model.live="username" type="text">
    <p>{{ $username }}</p>

<p>
    <button wire:click="decrement" class="p-2 bg-red-500 rounded-lg">-</button>
    {{ $count }}
    <button wire:click="increment" class="p-2 bg-green-500 rounded-lg">+</button>
</p>
</div>

<div>
    <input wire:model="name" type="text">
    <input wire:model="price" type="number">

    <table class="w11/12">
        @foreach($goats as $goat)
            <tr class="hover:bg-gray-50">
                <x-td>{{ $goat->id }}</x-td>
                <x-td>{{ $goat->name }}</x-td>
                <x-td>{{ $goat->color }}</x-td>
                <x-td>{{ $goat->price }}</x-td>
                <x-td>{{ $goat->birthday }}</x-td>
                <x-td>{{ $goat->sex }}</x-td>
                <x-td><a href="/goats/{{ $goat->id }}">Voir plus</a></x-td>
            </tr>
        @endforeach
    </table>

</div>