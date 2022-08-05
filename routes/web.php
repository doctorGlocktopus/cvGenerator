<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Select2AutoSearch;
use App\Http\Livewire\ImageUploadComponent;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/new', [App\Http\Controllers\HomeController::class, 'new'])->name('new');

Route::get('/view/{id?}', [App\Http\Controllers\HomeController::class, 'announcement'])->name('announcement');

Route::get('/api', Select2AutoSearch::class);

Route::get('image-upload', ImageUploadComponent::class);