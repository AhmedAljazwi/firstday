<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ComputerController;

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

Route::get('/computers', [ComputerController::class, 'index']);
Route::get('/computer-add', [ComputerController::class, 'add']);
Route::post('/computer-store', [ComputerController::class, 'store']);