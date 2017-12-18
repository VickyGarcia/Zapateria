@extends('layout')

@section('content')
    <h1>Crear Promoción</h1>

    <form action="/promociones" method="POST" role="form">

        {{ csrf_field() }}

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="" placeholder="ingresa el nombre" value="{{ old('nombre') }}">
        </div>

        <div class="form-group">
            <label for="">Fecha de inicio</label>
            <input type="date" class="form-control" name="fec_inicio" id="" placeholder="yyyy-mm-dd" value="{{ old('fec_inicio') }}">
        </div>

        <div class="form-group">
            <label for="">Fecha de vencimiento</label>
            <input type="date" class="form-control" name="fec_vencimiento" id="" placeholder="yyyy-mm-dd" value="{{ old('fec_vencimiento') }}">
        </div>

        <div class="form-group">
            <label for="">Descripcion</label>
            <textarea type="text" class="form-control" name="desc" id="" rows="3" placeholder="agregar descrición">{{ old('desc') }}</textarea>
        </div>

        <div class="form-group">
            <label for="">Id empleado</label>
            <input type="text" class="form-control" name="id_empleado" id="" placeholder="id_empleado" value="{{ old('id_empleado') }}">
        </div>

        <button type="submit" class="btn btn-primary">enviar</button>
    </form>
@stop
