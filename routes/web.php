<?php

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
    return view('posts/index');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.filter');
Route::get('category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('category/create', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::get('category/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');

Route::get('posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.filter');
Route::get('post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('post/create', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::post('post/{post}/edit', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::get('post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');

Route::get('tiles', [App\Http\Controllers\TileController::class, 'index'])->name('tile.filter');
Route::get('tile/create', [App\Http\Controllers\TileController::class, 'create'])->name('tile.create');
Route::post('tile/create', [App\Http\Controllers\TileController::class, 'store'])->name('tile.store');
Route::get('tile/{tile}/edit', [App\Http\Controllers\TileController::class, 'edit'])->name('tile.edit');
Route::post('tile/{tile}/edit', [App\Http\Controllers\TileController::class, 'update'])->name('tile.update');
Route::get('tile/{tile}', [App\Http\Controllers\TileController::class, 'show'])->name('tile.show');


Route::delete('post/postImage/{id}', [App\Http\Controllers\PostController::class, 'destroyImage'])->name('post.destroyImage');
Route::delete('post/postPdf/{id}', [App\Http\Controllers\PostController::class, 'destroyPdf'])->name('post.destroyPdf');
Route::delete('post/postVideo/{id}', [App\Http\Controllers\PostController::class, 'destroyVideo'])->name('post.destroyVideo');


// pages
// Route::get('history', [App\Http\Controllers\FrontController::class, 'history'])->name('history');
// Route::get('vision', [App\Http\Controllers\FrontController::class, 'vision'])->name('vision');
// Route::get('resources', [App\Http\Controllers\FrontController::class, 'resources'])->name('resources');
// Route::get('resources2', [App\Http\Controllers\FrontController::class, 'resources2'])->name('resources2');
// Route::get('gallery', [App\Http\Controllers\FrontController::class, 'gallery'])->name('gallery');

Route::get('ressingle', [App\Http\Controllers\FrontController::class, 'resourcesSingle'])->name('ressingle');
Route::get('events', [App\Http\Controllers\FrontController::class, 'events'])->name('events');
Route::get('eventsingle', [App\Http\Controllers\FrontController::class, 'eventSingle'])->name('eventsingle');

Route::get('{page}', [App\Http\Controllers\PageController::class, 'viewPage'])->name('viewpage');


Auth::routes();
