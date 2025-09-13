<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail', function () {
    return view('pages.detail');
})->name('detail');


Route::get('/tentang', function () {
    return  view('pages.about');
})->name('about');

Route::get('/kontak', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/admin', function () {
    return view('testAdmin');
});
