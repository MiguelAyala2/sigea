<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controllers\Middleware;
use App\Models\PedidoCompCab;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    // Funcion estica para enlazar un permiso con un metodo
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('Pedidos Listar|Usuarios Crear|Usuarios Editar|Usuarios Eliminar', only: ['index', 'store']),
            new Middleware('Pedidos Crear', only: ['create', 'store']),
            // new Middleware('Pedidos Editar', only: ['edit', 'update']),
            // new Middleware('Pedidos Eliminar', only: ['destroy']),
        ];
    }

    public function index()
    {
        $pedidos = PedidoCompCab::all();

        return view('compras.pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        return view('compras.pedidos.create');
    }
}
