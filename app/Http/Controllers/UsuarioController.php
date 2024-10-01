<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    // Funcion estica para enlazar un permiso con un metodo
    public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('Usuarios Listar|Usuarios Crear|Usuarios Editar|Usuarios Eliminar', only: ['index', 'store']),
            new Middleware('Usuarios Crear', only: ['create', 'store']),
            new Middleware('Usuarios Editar', only: ['edit', 'update']),
            new Middleware('Usuarios Eliminar', only: ['destroy']),
        ];
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
        // Obtenemos los datos a mostrar en la vista
        $roles = Role::pluck('name','name')->all();

        // Retornamos la vista con los datos obtenidos
        return view('usuarios.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('usuarios.index')
                        ->with('success','¡Usuario creada con éxito!');
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
    public function edit(User $usuario)
    {
        $usuario = User::find($usuario->id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $usuario->roles->pluck('name','name')->all();
    
        return view('usuarios.edit', compact('usuario','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {
        $input = $request->all();
        // if(!empty($input['password'])){ 
        //     $input['password'] = Hash::make($input['password']);
        // }else{
        //     $input = Arr::except($input,array('password'));    
        // }
    
        $user = User::find($usuario->id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$usuario->id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('usuarios.index')
                        ->with('success','¡Usuario actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')
                        ->with('success','¡Usuario Eliminado con éxito!');
    }
}
