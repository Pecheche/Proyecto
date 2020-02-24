@extends('layout')

@section('titulo', 'Portafolio')

@section('contenido')


<h1>Portafolio</h1> 

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