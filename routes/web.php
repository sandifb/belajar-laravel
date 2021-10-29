<?php

use App\Http\Controllers\KppController;
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




/**
 * CUSTOM ROUTE
 * Get, Put, Post, Delete
 */

Route::get('kpp',           [KppController::class, 'index']);
Route::post('kpp',          [KppController::class, 'store']);

Route::get('kpp/create',        [KppController::class, 'create']);
Route::get('kpp/edit/{id}',     [KppController::class, 'edit']);
Route::put('kpp/update/{id}',   [KppController::class, 'update']);
