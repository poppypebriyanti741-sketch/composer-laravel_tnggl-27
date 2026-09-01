<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/hai', function () {
    return view('hai');
});

Route::get('/data', function () {
    return view('data');
});