<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.index');
});

Route::get('contact', function () {
    return view('layouts.contact');
});
