<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Cart;

class SearchComponent extends Component
{
    // public $slug;

    public $search;

    public $product_cat;

    public $product_cat_id;
    
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item Added In Cart');
        return redirect()->route('cart.details');
    }

    public function mount()
    {
        // $this->slug = $slug;
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }
    public function render()
    {
        $product = Product::where('name','like','%'.$this->search.'%')
        ->where('category_id','like','%'.$this->product_cat_id.'%')->get();

        return view('livewire.search-component',['product'=>$product])->layout("layouts.base");
    }
}