<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutinaController;

Auth::routes(['verify' => true]);

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);
Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/create', [UserController::class, 'create'])->name('create');

Route::post('/entrenamientos', [UserController::class, 'rutinas'])->name('rutinas');

Route::post('/entrenamientos/store', [RutinaController::class, 'store'])->name('entrenamientos.store');
