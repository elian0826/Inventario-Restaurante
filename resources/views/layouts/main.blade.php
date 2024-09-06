<!doctype html>
<html lang="es">
  <head>
    <!-- Meta tags requeridos -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Integración de tu CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Numans:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>@yield('titulo_pagina')</title>
  </head>
  <body>
    
    @yield('contenido')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Integración de tu JS personalizado -->
    <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>
