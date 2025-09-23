<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InternController;
use App\Http\Middleware\visitorMiddleware;

Route::middleware([visitorMiddleware::class])->group(function () {
    // Middleware visitor to count visitor activity


    Route::get('/', [GuestController::class, 'index'])->name('home');
    Route::get('/detail/{department:slug}', [GuestController::class, 'detail'])->name('detail');

    Route::get('/department/{department:slug}/form', [InternController::class, 'index'])->name('intern.form');
    Route::post('/department/{department:slug}/form', [InternController::class, 'internStore'])->name('intern.store');

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

    Route::fallback(fn() => view('pages.empty-url'));

    require_once __DIR__ . '/admin/admin.php';
});
