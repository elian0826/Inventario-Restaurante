<!DOCTYPE html>
<html>
<head>
    <title>Inventario</title>
    <style>
        /* Estilos opcionales para el PDF */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Inventario</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <!-- Añade más columnas si es necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach ($inventario as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->cantidad }}</td>
                    <td>{{ $item->precio }}</td>
                    <!-- Añade más datos si es necesario -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
