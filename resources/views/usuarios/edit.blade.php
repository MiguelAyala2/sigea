@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>
        Editar Usuario
        <a href="{{ route('usuarios.index') }}" class="btn btn-info"><i class="fas fa-arrow-left"></i> Volver</a>
    </h1>
@stop

@section('content')

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Editar Usuario</h3>
        </div>


        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre:</label>
                    <input type="text" name="name" class="form-control" placeholder="Ej: Juan Perez"
                        value="{{ old('name',$usuario->name) }}">
                    @error('name')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Ej: jperez@infotecpy.com" value="{{ old('email', $usuario->email) }}">
                    @error('email')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Seleccionar Rol:</label>
                    <select name="roles[]" class="form-control">
                        @foreach ($roles as $value => $label)
                            <option value="{{ $value }}" {{ isset($userRole[$value]) ? 'selected' : ''}}>
                                {{ $label }}
                            </option>
                         @endforeach
                    </select>
                    @error('roles[]')
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
