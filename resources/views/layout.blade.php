<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    {{--/*Estilos*/--}}
    <style>

      .active a {
        color: green;
        text-decoration: none;
      }

    </style>



    <title> @yield('titulo', 'Proyecto') </title>
</head>

<body>

  @include('partials/nav')

  @yield('contenido')

</body>
</html>