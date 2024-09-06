@extends('layouts/main')

@section('titulo_pagina', 'Panel de Control')

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <!-- Barra lateral -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-sidebar sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <span data-feather="home"></span>
                            ORDENAR
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            INVENTARIO
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            PEDIDOS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-bag"></span>
                            PRODUCTOS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            FACTURAS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            CLIENTES
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            MESAS
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Contenido principal -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <!-- Barra superior -->
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom bg-navbar">
                <h1 class="h2 text-white">ASADERO Y COMIDAS RAPIDAS PERROFLACO</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="{{ route('logout') }}" class="btn custom-button">SALIR</a>
                </div>
            </div>

            <!-- Aquí va el contenido principal que cambiará según la sección -->
                <div class="container">
                    <h3>Bienvenido al Panel de Control de ASADERO Y COMIDAS RAPIDAS PERROFLACO</h3>
                    <p>¡Hola! Te damos la bienvenida al panel de control de ASADERO Y COMIDAS RAPIDAS PERROFLACO. Aquí puedes gestionar todos los aspectos de tu restaurante de manera eficiente y rápida.</p>
                    
                    <div class="welcome-message">
                        <img src="{{ asset('images/HOME.jpg') }}" alt="Imagen de Bienvenida" class="welcome-image">
                        <p>Desde este panel, puedes:</p>
                        <ul>
                            <li>Administrar tus mesas y reservas.</li>
                            <li>Controlar el inventario y realizar pedidos.</li>
                            <li>Generar informes de ventas y analizar el desempeño.</li>
                            <li>Personalizar los menús y promociones.</li>
                        </ul>
                    </div>
                    
                    <p>Selecciona una opción en el menú lateral para empezar a explorar y administrar tu restaurante.</p>
                </div>

        </main>
    </div>
</div>
@endsection
