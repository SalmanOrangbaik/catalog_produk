<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenulisController;
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

Auth::routes(['register' => false]);

Route::get('/', [FrontController::class, 'index']);

Route::get('produk', [FrontController::class, 'produk']);

Route::get('detail/{id}', [FrontController::class, 'details'])->name('detail');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//kategori
    Route::resource('kategori', KategoriController::class);

//Genre
    Route::resource('genre', GenreController::class);

//Penulis
    Route::resource('penulis', PenulisController::class);

//Book
    Route::resource('book', BookController::class);
});
