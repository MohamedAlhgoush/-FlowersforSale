<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;

class OrderComponent extends Component
{
    public function delete($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message',' Item Has Been Remove');
    }
    public function render()
    {
        return view('livewire.order-component')->layout("layouts.base");
    }
}
