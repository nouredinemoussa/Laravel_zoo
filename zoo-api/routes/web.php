<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['set-language'])->group(function () {
    Route::get('/contact', function () {
        return view('contact');
    });
});

Route::get('/switch-language/{lang}', [App\Http\Controllers\languageController::class, 'setLanguages'])
    ->name('language-switcher');
