<?php

use App\Http\Controllers\AuthController;
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

// untuk authentication
Route::get('login', [AuthController::class, 'login'])->name('login');
// Route::post('login', [AuthController::class, 'authenticate']);
// Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form'])->name('register'); // ambil data dari form register
Route::post('register', [AuthController::class, 'register'])->name('register.store'); // untuk proses registrasi nya

// untuk tabel category
Route::post('category', [CategoryController::class, 'store'])->name('category.store'); // untuk memasukkan data dari form ke database
Route::get('category', [CategoryController::class, 'index'])->name('category'); // halaman utama
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create'); // halaman create
Route::get('category/{id}', [CategoryController::class, 'show'])->name('category.show'); // halaman detail dari category tersebut
Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit'); // halaman edit
Route::patch('category/{id}', [CategoryController::class, 'update'])->name('category.update'); // untuk memperbarui data dari form ke database
Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy'); // untuk menghapus data