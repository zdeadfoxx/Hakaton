<?php

use App\Http\Controllers\HistoryOrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'index')->name('main');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('profiles',[ProfileController::class,'index'])->name('profile');
Route::get('profiles/settings',[ProfileController::class,'create'])->name('profile.settings');
Route::get('profiles/notify',[ProfileController::class,'delete'])->name('profile.notify');
Route::get('profiles/create_orders/',[ProfileController::class,'create_order'])->name('profile.create_order');


Route::get('profiles/historyorder',[HistoryOrderController::class,'index'])->name('historyorder');

Route::get('list_orders',[HistoryOrderController::class,'show'])->name('list_orders');
