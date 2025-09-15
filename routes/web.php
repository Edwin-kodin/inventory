<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.default');
});


Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});
