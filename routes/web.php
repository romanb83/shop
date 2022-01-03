<?php

use App\Http\Controllers\Cabinet\LoginController;
use App\Http\Controllers\Cabinet\RegisterController;
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

Route::get('/user', function () {
    return dd(1);
});
Route::get('/register', [RegisterController::class, 'show'])->name('show.register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [LoginController::class, 'show'])->name('show.login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
