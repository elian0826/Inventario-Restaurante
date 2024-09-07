@extends('layouts.admin')

@section('titulo_pagina', 'Panel de Administración')

@section('contenido_principal')
<div class="container">
    <h1>Bienvenido al Panel de Administración</h1>
    <p>Esta es la página de inicio del administrador.</p>
    <a href="{{ route('logout') }}" class="btn btn-danger">Salir del sistema</a>
</div>
@endsection
