<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::resource('news', NewsController::class);
Route::resource('contact', MessageController::class);
