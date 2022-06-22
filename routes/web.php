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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('announcement');
Route::get('/overview', [App\Http\Controllers\HomeController::class, 'list'])->name('overview');
Route::get('/new', [App\Http\Controllers\HomeController::class, 'new'])->name('new');

Route::get('/user/{id}', [App\Http\Controllers\HomeController::class, 'showUser'])->name('user');
Route::get('/announcement/{id}', [App\Http\Controllers\HomeController::class, 'announcement'])->name('announcement');
Route::get('/overviewAnnouncement/{id}', [App\Http\Controllers\HomeController::class, 'overviewAnnouncement'])->name('overviewAnnouncement');