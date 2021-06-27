<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderModeComponent extends Component
{
    public function render()
    {
        return view('livewire.order-mode-component')->layout("layouts.base");
    }
}
