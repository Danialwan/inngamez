<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $instagram = Contact::where('title',"Instagram")->first();
    $linkedin = Contact::where('title',"Linkedin")->first();
    $Facebook = Contact::where('title',"Facebook")->first();
    $Youtube = Contact::where('title',"Youtube")->first();
    $data= [
        "instagram" => $instagram,
        "linkedin" => $linkedin,
        "facebook" => $Facebook,
        "youtube" => $Youtube
    ];
    return view('home')->with($data);
});
Route::get('admin/home', function () {
    $instagram = Contact::where('title',"Instagram")->first();
    $linkedin = Contact::where('title',"Linkedin")->first();
    $Facebook = Contact::where('title',"Facebook")->first();
    $Youtube = Contact::where('title',"Youtube")->first();
    $data= [
        "instagram" => $instagram,
        "linkedin" => $linkedin,
        "facebook" => $Facebook,
        "youtube" => $Youtube
    ];
    return view('admin.home')->with($data);
});
Route::get('about', function () {
    $instagram = Contact::where('title',"Instagram")->first();
    $linkedin = Contact::where('title',"Linkedin")->first();
    $Facebook = Contact::where('title',"Facebook")->first();
    $Youtube = Contact::where('title',"Youtube")->first();
    $data= [
        "instagram" => $instagram,
        "linkedin" => $linkedin,
        "facebook" => $Facebook,
        "youtube" => $Youtube
    ];
    return view('about')->with($data);
});
Route::get('admin/about', function () {
    $instagram = Contact::where('title',"Instagram")->first();
    $linkedin = Contact::where('title',"Linkedin")->first();
    $Facebook = Contact::where('title',"Facebook")->first();
    $Youtube = Contact::where('title',"Youtube")->first();
    $data= [
        "instagram" => $instagram,
        "linkedin" => $linkedin,
        "facebook" => $Facebook,
        "youtube" => $Youtube
    ];
    return view('admin.about')->with($data);
});
// Route::get('/admin/news', function () {
//     return view('admin.news');
// });
// Route::get('admin/contact', function () {
//     return view('admin.contact');
// });
Route::get('/login', function () {
    $instagram = Contact::where('title',"Instagram")->first();
    $linkedin = Contact::where('title',"Linkedin")->first();
    $Facebook = Contact::where('title',"Facebook")->first();
    $Youtube = Contact::where('title',"Youtube")->first();
    $data= [
        "instagram" => $instagram,
        "linkedin" => $linkedin,
        "facebook" => $Facebook,
        "youtube" => $Youtube
    ];
    return view('login')->with($data);
});

Route::resource('news', NewsController::class);
Route::get('admin/news', [NewsController::class, 'admin']);
Route::match(['put', 'patch'], 'news/{news}/updateImage', [NewsController::class, 'updateImage']);
Route::match(['put', 'patch'], 'news/{news}/updateTitle', [NewsController::class, 'updateTitle']);
Route::match(['put', 'patch'], 'news/{news}/updateBody', [NewsController::class, 'updateBody']);

Route::get('news/create', [NewsController::class, 'create']);
// Route::get('news/{news}', [NewsController::class, 'show']);

Route::resource('contact', ContactController::class);
Route::get('admin/contact', [ContactController::class, 'create']);
Route::match(['put', 'patch'], 'admin/contact/instagram', [ContactController::class, 'updateInstagram']);
Route::match(['put', 'patch'], 'admin/contact/linkedin', [ContactController::class, 'updateLinkedin']);
Route::match(['put', 'patch'], 'admin/contact/facebook', [ContactController::class, 'updateFacebook']);
Route::match(['put', 'patch'], 'admin/contact/youtube', [ContactController::class, 'updateYoutube']);
