@extends('layout')

@section('titulo', 'Portafolio')

@section('contenido')


<h1>Portafolio</h1> 

<br>

<ul>

    @forelse ($portfolio as $portfolioItem)

        <li>{{$portfolioItem ['title'] }}</li>

    @empty

        <li>No hay proyectos para mostrar</li>

    @endforelse


</ul>


@endsection