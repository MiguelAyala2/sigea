@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>
    </h1>
@stop

@section('content')

    @if ($message = Session::get('success'))
        <div class="callout callout-success">
            <h5><i class="fas fa-check-circle mr-2" style="color: #28a745"></i>{{ $message }}</h5>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listado de Usuarios @can('Usuarios Crear')
                    <a href="{{ Route('usuarios.create') }}" class="btn btn-sm btn-info"><i class="fas fa-user-plus"></i>
                        Usuario</a>
                @endcan
            </h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Nombre:</th>
                        <th>Email:</th>
                        <th>Roles:</th>
                        <th>Creado el:</th>
                        <th>Verificado el:</th>
                        <th>Acciones:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>#</td>
                            <td>{{ $usuario->name ?? 'N/A' }}</td>
                            <td>{{ $usuario->email ?? 'N/A' }}</td>
                            <td>
                                @if (!empty($usuario->getRoleNames()))
                                    @foreach ($usuario->getRoleNames() as $v)
                                        <label class="badge badge-secondary text-light">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </td>
                            <td>{{ date('d/m/Y h:m:s', strtotime($usuario->created_at)) }}</td>
                            <td>{{ date('d/m/Y h:m:s', strtotime($usuario->email_verified_at ?? 'N/A')) }}</td>
                            <td>
                                <x-dropdown-a>

                                    @if (auth()->user()->can('Usuarios Editar'))
                                        <x-slot name="edit">{{ Route('usuarios.edit', $usuario->id) }}</x-slot>
                                    @endif

                                    @if (auth()->user()->can('Usuarios Eliminar'))
                                        <x-slot name="action">{{ Route('usuarios.destroy', $usuario->id) }}</x-slot>
                                    @endif
                                </x-dropdown-a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

@stop

@section('css')

@stop

@section('js')

@stop
