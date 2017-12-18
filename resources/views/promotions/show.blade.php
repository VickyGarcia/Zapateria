@extends('layout')

@section('content')
    <div class="container">
        <h1>{{ $promotions->nombre }} <small>{{ $promotions->employee->id }}</small></h1>
        <p>
                {{ $promotions }}
        </p>
    </div>
@stop