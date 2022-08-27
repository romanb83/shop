<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Cabinet\LoginController;
use App\Http\Controllers\Cabinet\RegisterController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'show'])->name('welcome');
Route::post('/search', [HomeController::class, 'search'])->name('search');

Route::get('/register', [RegisterController::class, 'show'])->name('show.register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [LoginController::class, 'show'])->name('show.login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware(['throttle:login']); //  !!!!!!!
Route::get('/register/{token}', [RegisterController::class, 'verify'])->name('register.verify');

Route::post('/regions', [AjaxController::class, 'getRegions'])->name('ajax.regions');
Route::post('/cities', [AjaxController::class, 'getCities'])->name('ajax.cities');
