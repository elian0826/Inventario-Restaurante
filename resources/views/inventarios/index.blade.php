@extends('layouts.main')

@section('titulo_pagina', 'Inventario')

@section('contenido')
<div class="container-fluid">
    <h1>Inventario</h1>

    <form action="{{ route('inventario.index') }}" method="GET" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="fecha_inicio">Fecha Inicio</label>
                    <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" value="{{ request('fecha_inicio') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="fecha_fin">Fecha Fin</label>
                    <input type="date" id="fecha_fin" name="fecha_fin" class="form-control" value="{{ request('fecha_fin') }}">
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>

    <a href="{{ route('inventario.exportar') }}" class="btn btn-success mb-4">Exportar a Excel</a>

    @if($inventarios->isEmpty())
        <p>No hay datos de inventario disponibles.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Tipo de Movimiento</th>
                    <th>Cantidad</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventarios as $inventario)
                    <tr>
                        <td>{{ $inventario->id }}</td>
                        <td>{{ $inventario->producto->nombre }}</td>
                        <td>{{ $inventario->tipo_movimiento }}</td>
                        <td>{{ $inventario->cantidad }}</td>
                        <td>{{ $inventario->fecha }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection



