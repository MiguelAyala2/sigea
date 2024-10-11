@extends('adminlte::page')

@section('title', 'Pedidos')

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
            <h3 class="card-title">Listado de Pedidos @can('Pedidos Crear')
                    <a href="{{ Route('pedidos.create') }}" class="btn btn-sm btn-info"><i class="fas fa-plus-square"></i>
                        Pedido</a>
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
                        <th>Sucursal:</th>
                        <th>Fecha:</th>
                        <th>Estado:</th>
                        <th>Items:</th>
                        <th>Cantidad:</th>
                        <th>Precio:</th>
                        <th>Acciones:</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @forelse ($pedidos as $pedido)
                    <tr>
                        <td>#</td>
                        <td>{{ $pedido->sucursal->suc_razon_social ?? 'N/A' }}</td>
                        <td>{{ date('d/m/Y h:m:s', strtotime($pedido->ped_com_fecha ?? 'N/A')) }}</td>
                        <td>{{ $pedido->estado ?? 'N/A' }}</td>
                        <td>
                            {{-- <x-dropdown-a>

                                @if (auth()->user()->can('Pedidos Editar'))
                                    <x-slot name="edit">{{ Route('usuarios.edit', $pedido->id) }}</x-slot>
                                @endif

                                @if (auth()->user()->can('Pedidos Eliminar'))
                                    <x-slot name="action">{{ Route('usuarios.destroy', $pedido->id) }}</x-slot>
                                @endif
                            </x-dropdown-a> --}}
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td class="text-center">* Aun no hay datos...</td>
                        </tr>
                    @endforelse
                </tbody>
                {{-- {!! $pedidos->links('pagination::bootstrap-5') !!} --}}
            </table>
        </div>

    </div>

@stop

@section('css')

@stop

@section('js')

@stop
