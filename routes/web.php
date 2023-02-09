<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('order/{id}',[App\Http\Controllers\OrderController::class, 'index']);

Route::post('order/{id}', [App\Http\Controllers\OrderController::class, 'ordering']);

Route::get('check-out', [App\Http\Controllers\OrderController::class, 'check_out']);

Route::delete('check-out/{id}', [App\Http\Controllers\OrderController::class, 'delete']);

Route::get('konfirmasi-check-out', [App\Http\Controllers\OrderController::class, 'confirm']);

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);