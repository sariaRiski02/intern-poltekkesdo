<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});
Route::get('/admin', function () {
    return view('testAdmin');
});
