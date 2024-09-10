<!-- resources/views/inventario/filtrar.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Filtrar Ventas</h1>

    <form action="{{ route('inventario.exportar') }}" method="GET">
        @csrf
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin:</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Generar Informe</button>
    </form>
</div>
@endsection
