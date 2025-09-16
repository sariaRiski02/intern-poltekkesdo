<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{department:slug}', [HomeController::class, 'detail'])->name('detail');

Route::get('/form', function () {
    return view('pages.form');
})->name('form');

Route::get('/pengumuman', function () {
    return view('pages.announcement');
})->name('announcement');

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


require_once __DIR__ . '/admin/admin.php';
