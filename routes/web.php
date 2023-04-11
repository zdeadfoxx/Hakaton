<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'index');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
