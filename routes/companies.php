<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Companies\CompaniesController;

Route::get('empresas', [CompaniesController::class, 'index']);
Route::get('tamano', function () {
    return "hola mundo";
});
Route::get('sector', function () {
    return "hola mundo";
});
