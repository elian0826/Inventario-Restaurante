@extends('layouts.main')

@section('contenido')
<div class="container mt-4">
    <h1>Crear Nueva Mesa</h1>

    <form action="{{ route('mesas.store') }}" method="POST" class="mt-4">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre de la Mesa</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="estado">Estado</label>
            <select id="estado" name="estado" class="form-control" required>
                <option value="libre" {{ old('estado') == 'libre' ? 'selected' : '' }}>Libre</option>
                <option value="ocupada" {{ old('estado') == 'ocupada' ? 'selected' : '' }}>Ocupada</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Guardar Mesa</button>
    </form>
</div>
@endsection
