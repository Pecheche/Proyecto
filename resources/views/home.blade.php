@extends('layout')

@section('titulo', 'Inicio')


@section('contenido')

<h1>Home</h1>

<br>

Bienvenid@ {{$nombre ?? "Invitado"}}!!

@endsection

 