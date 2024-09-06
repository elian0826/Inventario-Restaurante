@extends('layouts/main')

@section('titulo_pagina', 'Login de usuario')

@section('contenido')
<div class="container login-container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="card shadow-lg border-light rounded">
                <div class="card-body p-4">
                    <h2 class="text-center mb-4">Login de Usuario</h2>
                    <form action="{{ route('logear') }}" method="post">
                        @csrf
                        @method('POST')

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Introduce tu correo electrónico">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Introduce tu contraseña">
                        </div>

                        <button type="submit" class="btn custom-button w-100 py-2 mt-3">Entrar</button>
                        <a href="{{ route('registro') }}" class="btn custom-button w-100 py-2 mt-2 text-white">Regístrate aquí</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



