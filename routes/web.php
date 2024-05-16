<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('admin/home', function () {
    return view('admin.home');
});
Route::get('about', function () {
    return view('about');
});
Route::get('admin/about', function () {
    return view('admin.about');
});
// Route::get('/admin/news', function () {
//     return view('admin.news');
// });
Route::get('admin/contact', function () {
    return view('admin.contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::resource('news', NewsController::class);
Route::get('admin/news', [NewsController::class, 'admin']);

Route::resource('contact', MessageController::class);
