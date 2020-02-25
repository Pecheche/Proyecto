@extends('layout')

@section('titulo', 'Editar Proyecto')

@section('contenido')


<h1>Editar proyecto</h1> 


@include('partials.validation-errors')




<form method="POST" action="{{route('projects.update', $project)}}">

    @method('PATCH')


    @include('projects._form', ['btnText' => 'Actualizar'])

</form>



@endsection