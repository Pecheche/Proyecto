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

    <input name="name" placeholder="Nombre..."> <br>
    <input type="email" name="email" placeholder="Email..."> <br>
    <input name="subject" placeholder="Asunto..."> <br>
    <textarea name="content" placeholder="Mensaje..."></textarea> <br>
    <button>Enviar</button>


</form>


@endsection