<?php

use App\Http\Controllers\PageController;

//Route::get('/', [PageController::class, 'login']);
Route::get('/', function () {
    return view('login');
});

//Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/dashboard', function () {
    return view('dashboard');
});
//Route::get('/editarProyecto/{id}', [PageController::class, 'editarProyecto']);
Route::get('/editarProyecto/{id}', function ($id) {
    return view('editarProyecto' , ['id' => $id]);
});
//Route::get('/crearProyecto', [PageController::class, 'crearProyecto']);
Route::get('/crearProyecto', function () {
    return view('crearProyecto');
});