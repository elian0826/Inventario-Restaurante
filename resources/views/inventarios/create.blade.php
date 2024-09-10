@extends('layout.app')

@section('content')
    <h1>Añadir Movimiento de Inventario</h1>

    <form action="{{ route('inventario.store') }}" method="POST">
        @csrf

        <label for="producto_id">Producto</label>
        <select name="producto_id" required>
            @foreach($productos as $producto)
                <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
            @endforeach
        </select>

        <label for="tipo_movimiento">Tipo Movimiento</label>
        <select name="tipo_movimiento" required>
            <option value="entrada">Entrada</option>
            <option value="salida">Salida</option>
        </select>

        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" required>

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" required>

        <label for="comentario">Comentario</label>
        <textarea name="comentario"></textarea>

        <button type="submit">Registrar Movimiento</button>
    </form>
@endsection
