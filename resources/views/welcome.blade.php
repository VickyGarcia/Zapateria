@extends('layout')

@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
                @endauth
        </div>
    @endif

    <div class="top-right links">
        <a href="http://127.0.0.1/login">Login</a>
        <a href="http://127.0.0.1/register">Register</a>
    </div>

    <div class="content">
        <div class="title m-b-md">
            Zapatería
        </div>
    </div>
</div>

    @stop
