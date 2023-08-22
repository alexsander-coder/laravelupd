<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/cliente', ClienteController::class);
Route::post('/cliente/search', [ClienteController::class, 'search'])->name('cliente.search');

