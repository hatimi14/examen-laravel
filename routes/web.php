<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login']);

Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/editarProyecto/{id}', [PageController::class, 'editarProyecto']);
Route::get('/crearProyecto', [PageController::class, 'crearProyecto']);