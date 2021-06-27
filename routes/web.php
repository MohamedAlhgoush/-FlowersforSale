<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\OrderComponent;
use App\Http\Livewire\OrderModeComponent;
use App\Http\Livewire\OrderStatusComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\BrancheComponent;
use App\Http\Livewire\PaymentComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\TimeComponent;
use App\Models\Category;
use App\Models\Product;
use App\Http\Livewire\CategroyDetailsComponent;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
//For User
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/', HomeComponent::class);
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});

Route::get('/',HomeComponent::class);

Route::get('/category-product/{id}',[CategoryComponent::class,'render'])->name('category.product');

Route::get('/product/{slug}',ProductComponent::class)->name('product.details');

Route::get('/order',OrderComponent::class)->name('cart.details');

Route::get('/search',SearchComponent::class)->name('product.search');

Route::get('/order-mode',OrderModeComponent::class);

Route::get('/order-status',OrderStatusComponent::class);

Route::get('/aboutus',AboutUsComponent::class);

Route::get('/branche',BrancheComponent::class);

Route::get('/payment',PaymentComponent::class);

Route::get('/checkout',CheckoutComponent::class);

Route::get('/time',TimeComponent::class);

// Route::get('/htl',[HomeComponent::class,'single'])->name('htl');

// Route::get('/',[HomeComponent::class,'single2'])->name('times2');
