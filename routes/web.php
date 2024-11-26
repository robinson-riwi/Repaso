<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('blank', function () {
    return view('blank');
});

/*
 *  Module @companies
 */
Route::prefix('empresas')->group(function () {
    include_once __DIR__ . "/companies.php";
});

