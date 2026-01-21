<?php
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;


Route::apiResource('produits', ApiController::class);
Route::get('/filter', [ApiController::class, 'filtrer']);