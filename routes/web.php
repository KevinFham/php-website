<?php

use Illuminate\Support\Facades\Route;


Route::get('/debug', function () {
    return view('Hello World');
});

Route::get('/', function () {
    return view('welcome');
});
