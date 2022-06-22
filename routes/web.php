<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/clientes', ClienteController::class)->middleware('auth');
Route::resource('/peliculas', PeliculaController::class)->middleware('auth');
Route::resource('/users', UserController::class)->middleware('auth');

require __DIR__.'/auth.php';