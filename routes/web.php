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

//The controller_namespace should be used
Route::get('/books', 'App\Http\Controllers\BooksController@index');
Route::get('/books/{id}', 'App\Http\Controllers\BooksController@show');
Route::get('/books/{id:[\d]+}', 'App\Http\Controllers\BooksController@show');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
