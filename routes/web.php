<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('forgot', function () {
    return view('auth.forgot-password');
});

Route::post('language-switch', [LanguageController::class, 'languageSwitch'])->name('language.switch');
