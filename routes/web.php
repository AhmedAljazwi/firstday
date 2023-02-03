<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;

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

Route::get('/computer-edit/{id}', [ComputerController::class, 'edit']);
Route::put('/computer-update/{id}', [ComputerController::class, 'update']);

Route::get('/computer-delete/{id}', [ComputerController::class, 'delete']);

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/add-course', [CourseController::class, 'add']);
Route::post('/add-course', [CourseController::class, 'store']);