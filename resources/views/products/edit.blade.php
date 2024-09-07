@extends('layouts.main')

@section('titulo_pagina', 'Editar Producto')

@section('contenido')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <!-- Contenedor para el título y el botón Actualizar -->
        <div class="d-flex align-items-center">
            <h2 class="me-3">Editar Producto</h2>
        </div>

        <!-- Botón Regresar a la derecha -->
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Regresar</a>
    </div>
    
    <form action="{{ route('products.update', $product->id) }}" method="POST" onsubmit="return confirmEdit()">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Nombre del Producto</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" placeholder="Nombre del producto" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" placeholder="Precio del producto" required>
        </div>

        <!-- Botón Actualizar dentro del formulario -->
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection

