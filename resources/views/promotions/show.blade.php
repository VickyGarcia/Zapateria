@extends('layout')

@section('content')

    <div class="container-fluid">
        <h1>{{ $promotions->nombre }}</h1>
        <table class="table table-striped">
            <thead>
            <tr class="heading">
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de inicio</th>
                <th>Fecha de vencimiento</th>
                <th>Descripcion</th>
                <th>Fecha de creacion</th>
                <th>Empleado</th>
            </tr>
            </thead>
            <tr>
                <td>{{ $promotions->id }}</td>
                <td>{{ $promotions->nombre }}</td>
                <td>{{ $promotions->fec_inicio }}</td>
                <td>{{ $promotions->fec_vencimiento }}</td>
                <td>{{ $promotions->desc }}</td>
                <td>{{ $promotions->created_at }}</td>
                <td>{{ $promotions->employee->user->nombre }} {{ $promotions->employee->user->apellidos }}</td>
            </tr>
        </table>
    </div>
@stop


