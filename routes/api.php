<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\MensajesController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', [AuthController::class, 'user']);

    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/projects', [ProjectsController::class, 'index']);
    Route::get('/projects/latest', [ProjectsController::class, 'latest']);
    Route::get('/projects/{id}', [ProjectsController::class, 'show']);
    Route::post('/projects/create', [ProjectsController::class, 'store']);
    Route::patch('/projects/{id}', [ProjectsController::class, 'update']);
    Route::get('/projects/{id}', [ProjectsController::class, 'show']);
    
    /*Route::get('/telefonos', [TelefonoController::class, 'index']);      // listar
    Route::get('/telefonos/{id}', [TelefonoController::class, 'show']);   // uno
    Route::post('/telefonos', [TelefonoController::class, 'store']);      // crear
    Route::put('/telefonos/{id}', [TelefonoController::class, 'update']); // actualizar
    Route::delete('/telefonos/{id}', [TelefonoController::class, 'destroy']); // borrar*/

    Route::get('/mensajes/entrada', [MensajesController::class, 'mensajesEntrada']);
    Route::get('/mensajes/salida', [MensajesController::class, 'mensajesSalida']);
    Route::get('/mensajes/destinatarios', [MensajesController::class, 'mostrarDestinatarios']);
    Route::post('/mensajes/create', [MensajesController::class, 'store']);
    Route::get('/mensajeInfo/{id}', [MensajesController::class, 'show']);
    Route::patch('/mensajeLeido/{id}', [MensajesController::class, 'marcarLeido']);
});