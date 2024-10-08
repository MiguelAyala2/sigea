@extends('adminlte::page')

@section('title', 'Proveedores')

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
            <h3 class="card-title">Listado de Proveedores @can('Proveedores Crear')
                    <a href="{{ Route('proveedores.create') }}" class="btn btn-sm btn-info"><i class="fas fa-user-plus"></i>
                        Proveedor</a>
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
                        <th>Razon Social:</th>
                        <th>Ruc:</th>
                        <th>Dirección:</th>
                        <th>Teléfono:</th>
                        <th>Correo:</th>
                        <th>Acciones:</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($proveedores as $proveedor)
                    <tr>
                        <td>#</td>
                        <td>{{ $proveedor->prov_razon ?? 'N/A' }}</td>
                        <td>{{ $proveedor->prov_ruc ?? 'N/A' }}</td>
                        <td>{{ $proveedor->prov_direc ?? 'N/A' }}</td>                                                        
                        <td>{{ $proveedor->prov_telef ?? 'N/A' }}</td>
                        <td>{{ $proveedor->prov_correo ?? 'N/A' }}</td>
                        <td>
                            <x-dropdown-a>

                                @if (auth()->user()->can('Proveedores Editar'))
                                    <x-slot name="edit">{{ Route('proveedores.edit', $proveedor->prov_cod) }}</x-slot>
                                @endif

                                @if (auth()->user()->can('Proveedores Eliminar'))
                                    <x-slot name="action">{{ Route('proveedores.destroy', $proveedor->prov_cod) }}</x-slot>
                                @endif
                            </x-dropdown-a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">No existen registros...</td>
                    </tr>
                    @endforelse
                    {{-- @foreach ($proveedores as $proveedor)
                        <tr>
                            <td>#</td>
                            <td>{{ $proveedor->prov_razon ?? 'N/A' }}</td>
                            <td>{{ $proveedor->prov_ruc ?? 'N/A' }}</td>
                            <td>{{ $proveedor->prov_direc ?? 'N/A' }}</td>                                                        
                            <td>{{ $proveedor->prov_telef ?? 'N/A' }}</td>
                            <td>{{ $proveedor->prov_correo ?? 'N/A' }}</td>
                            <td>
                                <x-dropdown-a>

                                    @if (auth()->user()->can('Proveedores Editar'))
                                        <x-slot name="edit">{{ Route('proveedores.edit', $proveedor->id) }}</x-slot>
                                    @endif

                                    @if (auth()->user()->can('Proveedores Eliminar'))
                                        <x-slot name="action">{{ Route('proveedores.destroy', $proveedor->id) }}</x-slot>
                                    @endif
                                </x-dropdown-a>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
                {!! $proveedores->links('pagination::bootstrap-5') !!}
            </table>
        </div>

    </div>

@stop

@section('css')

@stop

@section('js')

@stop
