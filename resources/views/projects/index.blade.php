@extends('layout')

@section('titulo', 'Portfolio')

@section('contenido')


<h1>proyectos</h1> 

<br>

<a href="{{route('projects.create')}}">Crear Nuevo Proyecto</a>

<br>

<ul>

    @forelse ($projects as $project)

        <li><a href="{{route('projects.show', $project->id)}}"> {{ $project->title }} </a></li>

    @empty

        <li>No hay proyectos para mostrar</li>

    @endforelse


        {{ $projects->links() }} 


</ul>


@endsection