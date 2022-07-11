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

// Route::get('/newTest', [App\Http\Controllers\HomeController::class, 'newTest'])->name('newTest');



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/new', [App\Http\Controllers\HomeController::class, 'new'])->name('new');
Route::get('/list', [App\Http\Controllers\HomeController::class, 'list'])->name('list');

Route::get('/announcement/{id}', [App\Http\Controllers\HomeController::class, 'announcement'])->name('announcement');