@extends('layouts.main')

@section('contenido')
<div class="container mt-4">
    <h1>Editar Mesa</h1>

    <form action="{{ route('mesas.update', $mesa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre de la Mesa</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $mesa->nombre) }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="estado">Estado</label>
            <select id="estado" name="estado" class="form-control" required>
                <option value="libre" {{ old('estado', $mesa->estado) == 'libre' ? 'selected' : '' }}>Libre</option>
                <option value="ocupada" {{ old('estado', $mesa->estado) == 'ocupada' ? 'selected' : '' }}>Ocupada</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Actualizar Mesa</button>
    </form>
</div>
@endsection
