@extends('layout')

@section('content')
    <div class="container-fluid">
        <h1>Promociones</h1>
        <ul class="list-group">
            @foreach($promotions as $promotion)
                <li class="list-group-item"><a href="/promociones/{{$promotion->id}}"> {{ $promotion->nombre }}</a></li>
            @endforeach
        </ul>
        <label><a href="promociones/create">Crear nueva promoción</a></label>
    </div>
@stop