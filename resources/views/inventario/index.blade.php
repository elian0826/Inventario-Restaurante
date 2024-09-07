@extends('layout.app')

@section('content')
    <h1>Inventario</h1>
    <a href="{{ route('inventario.create') }}">Añadir Movimiento</a>

    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Tipo Movimiento</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Comentario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventarios as $inventario)
                <tr>
                    <td>{{ $inventario->producto->nombre }}</td>
                    <td>{{ $inventario->tipo_movimiento }}</td>
                    <td>{{ $inventario->cantidad }}</td>
                    <td>{{ $inventario->fecha }}</td>
                    <td>{{ $inventario->comentario }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{ route('inventario.exportarExcel') }}" method="GET">
        <label for="fecha_inicio">Fecha Inicio</label>
        <input type="date" name="fecha_inicio" required>

        <label for="fecha_fin">Fecha Fin</label>
        <input type="date" name="fecha_fin" required>

        <button type="submit">Descargar Excel</button>
    </form>

    <form action="{{ route('inventario.exportarPDF') }}" method="GET">
        <label for="fecha_inicio">Fecha Inicio</label>
        <input type="date" name="fecha_inicio" required>

        <label for="fecha_fin">Fecha Fin</label>
        <input type="date" name="fecha_fin" required>

        <button type="submit">Descargar PDF</button>
    </form>
@endsection
