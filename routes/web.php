<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

// untuk authentication
Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register_form'])->name('register')->middleware('guest'); // ambil data dari form register
Route::post('register', [AuthController::class, 'register']); // untuk proses registrasi nya

// untuk tabel category
Route::resource('category', CategoryController::class)->middleware('auth');

// Untuk tabel product
Route::resource('product', ProductController::class)->middleware('auth'); // untuk menampilkan data product