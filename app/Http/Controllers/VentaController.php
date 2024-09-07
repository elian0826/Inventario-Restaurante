<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Inventario;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer',
            'fecha' => 'required|date',
            'total' => 'required|numeric',
        ]);

        // Registrar la venta
        $venta = Venta::create($request->all());

        // Actualizar el inventario
        $producto = $venta->producto;
        $nuevoInventario = new Inventario([
            'producto_id' => $producto->id,
            'tipo_movimiento' => 'salida',
            'cantidad' => $request->cantidad,
            'fecha' => $request->fecha,
            'comentario' => 'Venta registrada',
        ]);
        $nuevoInventario->save();

        return redirect()->route('ventas.index')->with('success', 'Venta registrada correctamente.');
    }
}
