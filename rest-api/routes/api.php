<?php

use App\Http\Controllers\Country\CountryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Country\CountryControllerRes;

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

// Route::get('/country', [CountryController::class, 'index']);
// Route::get('/country/{id}', [CountryController::class,'edit']);
// Route::post('/country/create', [CountryController::class,'store']);
// Route::put('/country/{id}', [CountryController::class,'update']);
// Route::delete('/country/{id}', [CountryController::class,'distroy']);



Route::apiResource('/country', CountryControllerRes::class);
