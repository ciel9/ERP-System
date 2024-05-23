<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PrintController;

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

// Route untuk menampilkan formulir login
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');

// Route untuk memproses login
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::view('/dashboard', 'dashboard.dashboard')->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/print-pdf', [PrintController::class, 'printPDF'])->name('print.pdf');

// Registration routes
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/edit-pinjam-mobil', [AuthController::class, 'editForm'])->name('edit.pinjam_mobil');







