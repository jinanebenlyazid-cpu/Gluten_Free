<?php
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;


//Route::apiResource('produits', ApiController::class);
Route::get('/filter', [ApiController::class, 'index']);


Route::get('/test', function () {
    return response()->json([
        'message' => 'API test works without params',
        'status'  => 'ok',
    ], 200);
});