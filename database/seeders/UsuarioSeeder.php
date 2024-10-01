<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Listado de permisos a crear
        $permisos = [
            'Usuarios Listar',
            'Usuarios Crear',
            'Usuarios Editar',
            'Usuarios Eliminar',
        ];

        // Recorrer los registros en un foreach para crearlos
        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }

        // Crear Usuario Administrador
        $usuario = User::create([
            'name' => 'Administrador',
            'email' => 'admin@infotecpy.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('Paraguay2024')
        ]);

        // Crear Rol Admin
        $role = Role::create(['name' => 'Admin']);

        // Asignar todos los permisos creados al rol Admin
        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $usuario->assignRole([$role->id]);
    }
}
