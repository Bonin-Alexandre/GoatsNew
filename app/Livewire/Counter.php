<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Goat;
use Illuminate\Support\Collection;

class Counter extends Component
{
    public string $username;
    public int $count;
    public Collection $goats;

    public function mount()
    {
        $this->username = 'Le J';
        $this->count = 0;
        $this->goats = Goat::all();
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
