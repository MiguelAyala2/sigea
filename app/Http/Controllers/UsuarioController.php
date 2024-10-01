<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function __construct()
    {
        // $this->middleware(['permission:usuarios-listar|users.create|users.edit|users.delete'], ['only' => ['index', 'store']]);
        // $this->middleware(['permission:usuarios-crear'], ['only' => ['create', 'store']]);
        // $this->middleware(['permission:usuarios-editar'], ['only' => ['edit', 'update']]);
        // $this->middleware(['permission:usuarios-eliminar'], ['only' => ['destroy']]);
    }

    /**
     * Mostrar Vista Con Listado de Usuarios
     */
    public function index()
    {
        // Obtenemos los datos a mostrar en la vista
        $usuarios = User::select('id', 'name', 'email', 'created_at', 'email_verified_at')->paginate(10);

        // Retornamos la vista con los datos obtenidos
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
