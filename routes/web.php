<?php

use App\Http\Controllers\ReservasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutinaController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use App\Mail\ContactFormMailable;

Auth::routes(['verify' => true]);

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/create', [UserController::class, 'create'])->name('create');

Route::get('/users/data', [App\Http\Controllers\UserController::class, 'data'])->name('users.data');

// Mostrar la página de edición del usuario
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

// Procesar la actualización del usuario
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::get('/users', [UserController::class, 'table'])->name('table');

Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.delete');

Route::post('/entrenamientos', [UserController::class, 'rutinas'])->name('rutinas');

Route::post('/entrenamientos/store', [RutinaController::class, 'store'])->name('entrenamientos.store');

Route::delete('/entrenamientos/{id}', [RutinaController::class, 'destroy'])->name('rutinas.destroy');

Route::put('/entrenamientos/{id}', [RutinaController::class, 'update'])->name('rutinas.update');

Route::get('/muro', [PostController::class, 'index'])->name('muro');

Route::post('/muro/store', [PostController::class, 'store'])->name('posts.store');

Route::delete('/muro/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/reservas', [ReservasController::class, 'home'])->name( 'reservas');

Route::get('/reservas/create', [ReservasController::class, 'create'])->name('reservas.create');

Route::get('/reservas/{id}/edit', [ReservasController::class, 'edit'])->name('reservas.edit');

Route::put('/reservas/{id}', [ReservasController::class, 'update'])->name('reservas.update');

Route::post('/reservas/store', [ReservasController::class, 'store'])->name('reservas.store');

Route::delete('/reservas/{id}', [ReservasController::class, 'destroy'])->name('reservas.destroy');

Route::get('subscripcion/{id}', [UserController::class, 'subscribir'])->name('subscripcion.edit');

Route::put('subscripcion/{id}/update', [UserController::class, 'subscribirUpdate'])->name('subscripcion.update');

Route::post('/contacto', [ContactFormMailable::class, 'enviar'])->name('contacto.send');


Route::get('subscripcion', function () {
    return view('subscripcion');
})->name('subscripcion');
//RUTAS DE VISTAS


Route::get('/funcional', function () {
    return view('funcional');
})->name('funcional');
Route::get('/sombra', function () {
    return view('sombra');
})->name('sombra');
Route::get('/cardio', function () {
    return view('cardio');
})->name('cardio');

Route::get('/volumen', function () {
    return view('volumen');
})->name('volumen');
Route::get('/mantenimiento', function () {
    return view('mantenimiento');
})->name('mantenimiento');
Route::get('/definicion', function () {
    return view('definicion');
})->name('definicion');
