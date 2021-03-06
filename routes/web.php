<?php

use App\Http\Controllers\KppController;
use App\Http\Controllers\PartisipanController;
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


// Cara Detail
Route::get('kpp',                   [KppController::class, 'index']);
Route::post('kpp',                  [KppController::class, 'store']);

Route::get('kpp/create',            [KppController::class, 'create']);
Route::get('kpp/{id}/edit',         [KppController::class, 'edit']);
Route::put('kpp/{id}/update',       [KppController::class, 'update']);
Route::delete('kpp/{id}/delete',    [KppController::class, 'destroy']);


//Cara Cepat
Route::resource('partisipan', PartisipanController::class);
