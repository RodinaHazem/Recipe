<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RecipeApiController;
use App\Http\Controllers\Api\FavoriteApiController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/recipes', [RecipeApiController::class, 'index']);
// favorites
Route::get('/favorites/{device_id}', [FavoriteApiController::class, 'index']);
Route::post('/favorites', [FavoriteApiController::class,'store']);
Route::delete('/favorites/{id}', [FavoriteApiController::class, 'destroy']);
// ده غلط الي تحت ده
// Route::apiResource('/favorites', FavoriteApiController::class);
