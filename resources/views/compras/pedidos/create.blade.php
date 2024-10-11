@extends('adminlte::page')

@section('title', 'Pedido')

@section('content_header')
    <h1>
        Añadir Pedido
        <a href="{{ route('usuarios.index') }}" class="btn btn-info"><i class="fas fa-arrow-left"></i> Volver</a>
    </h1>
@stop

@section('content')

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Añadir Pedido</h3>
        </div>


        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf
            <div class="card-body row">

                <div class="form-group col-3">
                    <label for="exampleInputEmail1">Nombre:</label>
                    <input type="text" name="name" class="form-control" placeholder="Ej: Juan Perez"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group col-3">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Ej: jperez@infotecpy.com" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group col-3">
                    <label for="exampleInputEmail1">Contraseña:</label>
                    <input type="text" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}">
                    @error('password')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror
                </div>
                

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-info"><i class="fas fa-save"></i> Guardar</button>
            </div>
        </form>
    </div>

@stop

@section('css')

@stop

@section('js')

@stop
