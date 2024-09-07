@extends('layouts.main')

@section('titulo_pagina', 'Listado de Productos')

@section('contenido')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <h2>PRODUCTOS</h2>
        <div>
            <a href="{{ route('products.create') }}" class="btn custom-button">Agregar</a>
            <a href="{{ route('home') }}" class="btn custom-button">Regresar</a>
        </div>
    </div>

    <!-- Mostrar productos -->
    @if($products->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->formatted_price }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline" data-confirm="¿Estás seguro de que deseas eliminar este producto?">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay productos registrados.</p>
    @endif
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/custom.js') }}"></script>
@endpush
