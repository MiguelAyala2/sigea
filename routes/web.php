<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /**
     * Rutas para el modulo Usuarios
     */
    Route::controller(UsuarioController::class)->group(function () {
        Route::get('usuarios', 'index')->name('usuarios.index');
        Route::get('usuarios/create', 'create')->name('usuarios.create');
        Route::post('usuarios/store', 'store')->name('usuarios.store');
        Route::get('usuarios/{usuario}', 'show')->name('usuarios.show');
        Route::get('usuarios/{usuario}/edit', 'edit')->name('usuarios.edit');
        Route::put('usuarios/{usuario}', 'update')->name('usuarios.update');
        Route::delete('usuarios/{usuario}', 'destroy')->name('usuarios.destroy');
    });
});
