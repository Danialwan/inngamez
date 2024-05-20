<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Models\Contact;
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
// Route::get('admin/contact', function () {
//     return view('admin.contact');
// });
Route::get('/login', function () {
    return view('login');
});

Route::resource('news', NewsController::class);
Route::get('admin/news', [NewsController::class, 'admin']);
Route::get('news/create', [NewsController::class, 'create']);
// Route::get('news/{news}', [NewsController::class, 'show']);

Route::resource('contact', ContactController::class);
Route::get('admin/contact', [ContactController::class, 'create']);
Route::match(['put', 'patch'], 'admin/contact/instagram', [ContactController::class, 'updateInstagram']);
Route::match(['put', 'patch'], 'admin/contact/linkedin', [ContactController::class, 'updateLinkedin']);
Route::match(['put', 'patch'], 'admin/contact/facebook', [ContactController::class, 'updateFacebook']);
Route::match(['put', 'patch'], 'admin/contact/youtube', [ContactController::class, 'updateYoutube']);
