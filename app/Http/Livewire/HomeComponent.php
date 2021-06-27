<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class HomeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $categories = Category::paginate(12);
        return view('livewire.home-component',['categories' => $categories])->layout("layouts.base");
    }
}