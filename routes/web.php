<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('forgot', function () {
    return view('auth.forgot-password');
});
