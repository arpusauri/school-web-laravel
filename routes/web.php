<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/join/apply', [HomeController::class, 'apply'])->name('apply');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/loginaksi', [LoginController::class, 'loginaksi'])->name('loginaksi');
Route::get('/logoutaksi', 'LoginController@logoutaksi')->name('logoutaksi')->middleware('auth');
Route::get('/admin', 'AdminController@index')->name('home')->middleware('auth');
