<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('register', [RegisterController::class, 'index']);

// untuk tabel category
Route::post('category', [CategoryController::class, 'store']); // untuk memasukkan data dari form ke database
Route::get('category', [CategoryController::class, 'index']); // halaman utama
Route::get('category/create', [CategoryController::class, 'create']); // halaman create
Route::get('category/{id}', [CategoryController::class, 'show']); // halaman detail dari category tersebut
Route::get('category/{id}/edit', [CategoryController::class, 'edit']); // halaman edit
Route::patch('category/{id}', [CategoryController::class, 'update']); // untuk memperbarui data dari form ke database
Route::delete('category/{id}', [CategoryController::class, 'destroy']); // untuk menghapus data