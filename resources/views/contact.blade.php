@extends('layout')

@section('titulo', 'Contacto')

@section('contenido')

<h1>Contacto</h1>

<br>

<form method="POST" action="{{ route('contact') }}">

    @csrf

    <input name="name" placeholder="Nombre..." value="{{old('name')}}" > <br>
    {!! $errors->first('name', ':message <br>')!!} 


    <input type="email" name="email" placeholder="Email..." value="{{old('email')}}" > <br>
    {!! $errors->first('email', ':message <br>')!!} 


    <input name="subject" placeholder="Asunto..." value="{{old('subject')}}" > <br>
    {!! $errors->first('subject', ':message <br>')!!} 


    <textarea name="content" placeholder="Mensaje..." value="{{old('content')}}" ></textarea> <br>
    {!! $errors->first('content', ':message <br>' )!!}     


    <button>Enviar</button>


</form>


@endsection