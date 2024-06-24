<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\AuthController;

// Ruta para registrar un nuevo usuario
Route::post('registro', [AuthController::class, 'registro']);

// Ruta para iniciar sesión y obtener un token de acceso
Route::post('login', [AuthController::class, 'acceso'])->name("login");

// Grupo de rutas que requieren autenticación usando el middleware 'auth:sanctum'
Route::group(['middleware' =>['auth:sanctum']], function() {
    
    // Rutas RESTful para la gestión de libros (index, show, store, update, destroy)
    Route::apiResource('libros', LibrosController::class);
    
    // Ruta para cerrar sesión y revocar el token de acceso actual
    Route::get('cerrarSession', [AuthController::class, 'cerrarSession']);
});
