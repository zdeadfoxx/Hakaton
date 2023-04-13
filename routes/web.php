<?php

use App\Http\Controllers\HistoryOrderController;
use App\Http\Controllers\OrderControler;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistermantController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'index')->name('main');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('profiles',[ProfileController::class,'index'])->name('profile');

Route::get('profiles/settings',[ProfileController::class,'create'])->name('profile.settings');
Route::get('profiles/notify',[ProfileController::class,'show'])->name('profile.notify');
Route::get('profiles/create_orders/',[ProfileController::class,'store'])->name('profile.create_order');
Route::get('profiles/historyorder',[HistoryOrderController::class,'index'])->name('historyorder');



Route::get('list_orders',[OrderControler::class,'index'])->name('list_orders');

Route::get('list_orders/add_notifyy',[OrderControler::class,'add_notifyy'])->name('list_orders.add_notifyy');







Route::controller(TextController::class)->group(function () {

    route::get('/texts',[TextController::class,'index'])->name('text.index');

    Route::get('texts/create',[TextController::class,'create'])->name('text.create');

    Route::post('texts/store',[TextController::class,'store'])->name('text.store');

    Route::get('texts/{text}',[TextController::class,'show'])->name('text.show');

    Route::get('texts/{texts}/edit',[TextController::class,'edit'])->name('text.edit');

    Route::put('texts/{texts}',[TextController::class,'update'])->name('text.update');

    Route::delete('texts/{text}',[TextController::class,'delete'])->name('text.delete');
});

