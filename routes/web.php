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
        Route::get('usuario/create', 'create')->name('usuarios.create');
        Route::post('usuario/store', 'store')->name('usuarios.store');
        Route::get('usuario/{usuario}', 'show')->name('usuarios.show');
        Route::get('usuario/{usuario}/edit', 'edit')->name('usuarios.edit');
        Route::put('usuario/{usuario}', 'update')->name('usuarios.update');
        Route::delete('usuario/{usuario}', 'destroy')->name('usuarios.destroy');
    });
});
