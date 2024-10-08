<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProveedorRequest;
use App\Http\Requests\UpdateProveedorRequest;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Realizamos la consulta
        $proveedores = Proveedor::select('prov_cod','prov_razon', 'prov_ruc', 'prov_direc', 'prov_telef', 'prov_correo')->orderBy('prov_razon', 'asc')->paginate(10);

        // Devolvemos la vista con los datos
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProveedorRequest $request)
    {
        $proveedor = new Proveedor();

        $proveedor->prov_razon = $request->prov_razon;
        $proveedor->prov_ruc = $request->prov_ruc;
        $proveedor->prov_direc = $request->prov_direc;
        $proveedor->prov_telef = $request->prov_telef;
        $proveedor->prov_correo = $request->prov_correo;

        $proveedor->save();

        return redirect()->route('proveedores.index')->with('success', 'Proveedor registrado con Exito...');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        return view('proveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProveedorRequest $request, Proveedor $proveedor)
    {
        $proveedor->prov_razon = $request->prov_razon;
        $proveedor->prov_ruc = $request->prov_ruc;
        $proveedor->prov_direc = $request->prov_direc;
        $proveedor->prov_telef = $request->prov_telef;
        $proveedor->prov_correo = $request->prov_correo;

        $proveedor->save();

        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado con Exito...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado con Exito...');
    }
}
