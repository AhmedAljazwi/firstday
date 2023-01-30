<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/home', function() {
    return view('home');
});

Route::get('/form', function() {
    return view('form');
});

Route::post('/form-send', function(Request $request) {
    return $request;
});

Route::get('/', function () {
    return view('welcome');
});
