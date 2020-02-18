@extends('layout')

@section('titulo', 'Contacto')

@section('contenido')

<h1>Contacto</h1>

<br>

@if($errors->any())

    @foreach ($errors->all() as $error)

        <p>{{$error}}</p>
        
    @endforeach

@endif

<form method="POST" action="{{ route('contact') }}">

    @csrf

    <button>Enviar</button>


</form>


@endsection