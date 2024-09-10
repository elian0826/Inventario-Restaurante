@extends('layouts/main')

@section('titulo_pagina', 'Registro de usuario')

@section('contenido')
<div class="container register-container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow-lg border-light rounded">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">Registro de Usuario</h2>
                    <form action="{{ route('registrar') }}" method="post">
                        @csrf
                        @method('POST')

                        <div class="mb-3">
                            <label for="name" class="form-label">Usuario</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese su Usuario">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su correo electrónico">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña">
                        </div>

                        <button type="submit" class="btn custom-button w-100 py-2 mt-3">Registrarse</button>
                        <a href="{{ route('login') }}" class="btn custom-button w-100 py-2 mt-2 text-white">Iniciar Sesión</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

