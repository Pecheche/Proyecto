@extends('layout')

@section('titulo', 'Crear Proyecto')

@section('contenido')


<h1>Nuevo proyecto</h1> 

<br>

<form method="POST" action="{{route('projects.store')}}">

    @csrf

    <label>

        Titulo del proyecto <br>
        <input type="text" name="title" value="{{old('name')}}">

    </label>

    <br>

    <label>

        Descripción del proyecto <br>
        <textarea name="description" value="{{old('description')}}"> </textarea>

    </label>

    <br>

    <label>

        URL del proyecto <br>
        <input type="text" name="url" value="{{old('url')}}">

    </label>

    <br>

    <button>Crear proyecto</button>

</form>



@endsection