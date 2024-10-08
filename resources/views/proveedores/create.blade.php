@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>
        Añadir Proveedor
        <a href="{{ route('proveedores.index') }}" class="btn btn-info"><i class="fas fa-arrow-left"></i> Volver</a>
    </h1>
@stop

@section('content')

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Añadir Proveedor</h3>
        </div>


        <form action="{{ route('proveedores.store') }}" method="POST">
            @csrf
            <div class="card-body row">

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Razon Social:</label>
                    <input type="text" name="prov_razon" class="form-control" placeholder="Ej: Sigea S.A"
                        value="{{ old('prov_razon') }}">
                    @error('prov_razon')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Ruc:</label>
                    <input type="text" name="prov_ruc" class="form-control" placeholder="Ej: 1234567-3" value="{{ old('prov_ruc') }}">
                    @error('prov_ruc')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Dirección:</label>
                    <input type="text" name="prov_direc" class="form-control" placeholder="Calle, Tal lado..." value="{{ old('prov_direc') }}">
                    @error('prov_direc')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Telefono:</label>
                    <input type="text" name="prov_telef" class="form-control" placeholder="0984123456..." value="{{ old('prov_telef') }}">
                    @error('prov_telef')
                        <p class="text-danger">*{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group col-12">
                    <label for="exampleInputEmail1">Correo:</label>
                    <input type="email" name="prov_correo" class="form-control" placeholder="juanperez@gmail.com" value="{{ old('prov_correo') }}">
                    @error('prov_correo')
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
