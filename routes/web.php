<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('forgot', function () {
    return view('auth.forgot-password');
});

Route::get('index', function () {
    return view('dashboard.index');
});
Route::get('dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('companies', function () {
    return view('dashboard.companies');
});

Route::fallback(function () {
    return response()->view('layouts.error-404');
});

Route::post('language-switch', [LanguageController::class, 'languageSwitch'])->name('language.switch');
