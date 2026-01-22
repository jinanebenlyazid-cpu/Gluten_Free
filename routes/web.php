<?php

use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\RproduitsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::fallback(function () { 
    return view('erreur'); 
});



Route::get('/produits', [ProduitsController::class, 'index']);

Route::get('/categorie/{categorie}', [ProduitsController::class, 'getProductsByCategorie']);

Route::resource('Produits', RproduitsController::class); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['useruser'])->group(function () {
    Route::get('/espaceclient', [ProduitsController::class, 'espaceclient'])
        ->name('espaceclient');
});



Route::middleware(['adminuser'])->group(function () {

    Route::get('/Produits/create', [RproduitsController::class, 'create'])
        ->name('create');

    Route::post('/Produits', [RproduitsController::class, 'store'])
        ->name('store');

    Route::get('/Produits/{id}/edit', [RproduitsController::class, 'edit'])
        ->name('edit');

    Route::put('/Produits/{id}', [RproduitsController::class, 'update'])
        ->name('update');

    Route::delete('/Produits/{id}', [RproduitsController::class, 'destroy'])
        ->name('destroy');

    Route::get('/espaceadmin', [RproduitsController::class, 'espaceadmin'])
        ->name('espaceadmin');
});

