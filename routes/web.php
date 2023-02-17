<?php

use App\Http\Controllers\PlayerController;
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
    return view('home');
});

// ! untuk melindungi. berfungsi seperti SESSION di php
Route::middleware(['auth'])->group(function () {

    Route::resource('players', PlayerController::class);
    // Route::get('/players', [PlayerController::class, 'index']);
    // Route::get('/create', [PlayerController::class, 'create']);
    // Route::post('/store', [PlayerController::class, 'store']);
    // Route::get('{id}/edit', [PlayerController::class, 'edit']);
    // Route::put('{id}', [PlayerController::class, 'update']);
    // Route::delete('{id}', [PlayerController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');