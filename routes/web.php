<?php

use App\Http\Controllers\ProduitsController;
use Illuminate\Support\Facades\Route;


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

