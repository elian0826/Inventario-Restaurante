<?php

namespace App\Http\Controllers;

use App\Models\Inventario; // Asegúrate de que esta línea esté correcta
use App\Models\Venta;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InventariosExport;

class InventarioController extends Controller
{
    public function index(Request $request)
    {
        $query = Inventario::query();

        if ($request->has('fecha_inicio') && $request->has('fecha_fin')) {
            $fechaInicio = $request->input('fecha_inicio');
            $fechaFin = $request->input('fecha_fin');
            $query->whereBetween('fecha', [$fechaInicio, $fechaFin]);
        }

        $inventarios = $query->with('producto')->get(); 

        return view('inventarios.index', compact('inventarios'));
    }

    public function create()
    {
        $productos = \App\Models\Product::all();
        return view('inventario.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required',
            'tipo_movimiento' => 'required',
            'cantidad' => 'required|integer',
            'fecha' => 'required|date',
        ]);

        Inventario::create($request->only(['producto_id', 'tipo_movimiento', 'cantidad', 'fecha', 'comentario'])); // Especifica las columnas que deseas guardar

        return redirect()->route('inventario.index')->with('success', 'Movimiento registrado correctamente.');
    }

    public function exportarExcel(Request $request)
    {
        return Excel::download(new InventariosExport($request->all()), 'inventarios.xlsx');
    }
}

