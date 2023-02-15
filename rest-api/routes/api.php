<?php

use App\Http\Controllers\Country\CountryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/country', [CountryController::class, 'index']);
Route::get('/country/{id}', [CountryController::class,'edit']);
Route::post('/country/create', [CountryController::class,'store']);
Route::put('/country/{country}', [CountryController::class,'update']);
Route::delete('/country/{country}', [CountryController::class,'distroy']);
