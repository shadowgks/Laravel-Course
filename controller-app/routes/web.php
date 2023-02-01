<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProvisionServer;
use Illuminate\Database\Schema\IndexDefinition;

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

Route::get('/', function () {
    return view('welcome');
});

//Simple Route Controller UserController
// Route::get('/user', [UserController::class, 'showUser']);
// Route::get('/user/create', [UserController::class, 'createUser']);
// Route::get('/user/edit/{id}', [UserController::class, 'editUser']);
// Route::get('/user/update/{id}', [UserController::class, 'updateUser']);
// Route::get('/user/delete/{id}', [UserController::class, 'deleteUser']);

//Grouped Route Controller UserController
Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'showUser');
    Route::get('/user/create', 'createUser');
    Route::get('/user/edit/{id}', 'editUser');
    Route::get('/user/update/{id}', 'updateUser');
    Route::get('/user/delete/{id}', 'deleteUser');
});




//Resource
//==========================================================
//Route::resource()
// Route::resource('/post', PostController::class, ['index']);

// Route::resource('post', PostController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('post', PostController::class)->except([
//     'create', 'store', 'update', 'destroy', 'index'
// ]);


// Invoke
// Route::get('Server',ProvisionServer::class);

//Construct
Route::resource('s', UserController::class);
