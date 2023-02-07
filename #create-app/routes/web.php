<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

// Route::get('post/create', [PostController::class, 'create']);
// Route::get('post', [PostController::class, 'index'])->name('index-post');
// Route::post('post/insert', [PostController::class, 'store'])->name('smiya');
// Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('edit-post');
// Route::put('post/update/{id}', [PostController::class, 'update'])->name('update-post');
// Route::get('post/delete/{id}', [PostController::class, 'distroy'])->name('delete-post');
// Route::get('posts/delete/all', [PostController::class, 'distroyAll'])->name('delete-all');
// Route::get('posts/delete/all/truncate', [PostController::class, 'distroyAllTruncate'])->name('delete-all-truncate');
