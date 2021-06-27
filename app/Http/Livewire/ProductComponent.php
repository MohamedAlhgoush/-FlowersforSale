<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;

class ProductComponent extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item Added In Cart');
        return redirect()->route('cart.details');
    }

    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        return view('livewire.product-component',['product'=>$product])->layout("layouts.base");
    }
}
