<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AddressesController;
use App\Livewire\SearchZipcode;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
});


Route::resource('/customers', CustomerController::class);
Route::resource('/addresses', AddressesController::class);

//Livewire Components
Route::get('/search-zipcode', SearchZipcode::class)->name('search-zipcode');


require __DIR__.'/auth.php';
