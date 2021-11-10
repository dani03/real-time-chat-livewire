<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Example extends Component
{
    public String $name = 'daniel';
    public function render()
    {
        return view('livewire.example');
    }
}
