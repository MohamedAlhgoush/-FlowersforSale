<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class CategoryComponent extends Component
{
    
    public function render($id)
    {
        $categories = Category::with('products')->find($id); 
        return view('livewire.category-component',['categories' => $categories])->layout("layouts.base");
    }

}
