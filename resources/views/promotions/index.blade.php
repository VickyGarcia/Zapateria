@extends('layout')

@section('content')
    <div class="container-fluid">
        <h1>Promociones</h1>
        <ul class="list-group">
            @foreach($promotions as $promotion)
                <li class="list-group-item">{{ $promotion->nombre }}</li>
            @endforeach
        </ul>
    </div>
@stop