<?php

use App\Http\Controllers\ProveedorController;
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

    /**
     * Rutas para el modulo Proveedor
     */
    Route::controller(ProveedorController::class)->group(function () {
        Route::get('proveedores', 'index')->name('proveedores.index');
        Route::get('proveedores/create', 'create')->name('proveedores.create');
        Route::post('proveedores/store', 'store')->name('proveedores.store');
        // Route::get('proveedores/{proveedor}', 'show')->name('proveedores.show');
        Route::get('proveedores/{proveedor}/edit', 'edit')->name('proveedores.edit');
        Route::put('proveedores/{proveedor}', 'update')->name('proveedores.update');
        Route::delete('proveedores/{proveedor}', 'destroy')->name('proveedores.destroy');
    });
});
