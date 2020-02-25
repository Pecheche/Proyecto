@extends('layout')

@section('titulo', 'Crear Proyecto')

@section('contenido')


<h1>Nuevo proyecto</h1> 


@include('partials.validation-errors')




<form method="POST" action="{{route('projects.store')}}">


    @include('projects._form', ['btnText' => 'Crear'])


</form>



@endsection