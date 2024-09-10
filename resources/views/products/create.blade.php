@extends('layouts.main')

@section('titulo_pagina', 'Crear Producto')

@section('contenido')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <div class="d-flex align-items-center">
            <h2 class="me-3">Agregar Producto</h2>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-secondary">Regresar</a>
    </div>
    
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre del Producto</label>
            <input type="text" name="name" class="form-control" placeholder="Nombre del producto" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="number" name="price" class="form-control" placeholder="Precio del producto" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection


