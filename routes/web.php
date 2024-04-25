<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutinaController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);
Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/create', [UserController::class, 'create'])->name('create');

Route::get('/users/data', [App\Http\Controllers\UserController::class, 'data'])->name('users.data');

Route::put('/users/{id}', [UserController::class, 'edit'])->name('users.edit');

Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.delete');

Route::post('/entrenamientos', [UserController::class, 'rutinas'])->name('rutinas');

Route::post('/entrenamientos/store', [RutinaController::class, 'store'])->name('entrenamientos.store');

Route::delete('/entrenamientos/{id}', [RutinaController::class, 'destroy'])->name('rutinas.destroy');

Route::put('/entrenamientos/{id}', [RutinaController::class, 'update'])->name('rutinas.update');

Route::post('/muro/store', [PostController::class, 'store'])->name('posts.store');
