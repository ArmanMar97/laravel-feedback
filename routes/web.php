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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
Route::post('/',[\App\Http\Controllers\HomeController::class,'store']);

Auth::routes();

Route::get('/dashboard',[\App\Http\Controllers\DashboardController::class,'index'])->middleware('auth');
Route::get('/dashboard/{id}',[\App\Http\Controllers\DashboardController::class,'show'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
