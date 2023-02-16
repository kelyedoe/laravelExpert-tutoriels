<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.index');
});

Route::get('contact', function () {
    return view('layouts.contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
