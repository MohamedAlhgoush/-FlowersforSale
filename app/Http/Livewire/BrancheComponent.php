<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BrancheComponent extends Component
{
    public function render()
    {
        return view('livewire.branche-component')->layout("layouts.base");
    }
}
