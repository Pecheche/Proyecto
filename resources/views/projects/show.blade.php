@extends('layout')

@section('titulo', 'Portafolio | ' . $project->title)

@section('contenido')

<h1>{{ $project->title}}</h1>

<p>{{ $project->description }}</p> 

<p>{{ $project->created_at }}</p> <br>

<a href="{{route('projects.edit', $project)}}">Editar</a>

@endsection