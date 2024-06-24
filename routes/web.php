<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/login', [LibrosController::class, 'index'])->name('login');