<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Venta;
use App\Exports\VentasExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;


class InventarioController extends Controller
{
    public function index()
    {
        $inventarios = Inventario::with('producto')->get();
        return view('inventario.index', compact('inventarios'));
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

        Inventario::create($request->all());

        return redirect()->route('inventario.index')->with('success', 'Movimiento registrado correctamente.');
    }

    public function exportarExcel(Request $request)
    {
        $ventas = Venta::whereBetween('fecha', [$request->fecha_inicio, $request->fecha_fin])->get();
        return Excel::download(new VentasExport($ventas), 'ventas.xlsx');
    }

    public function exportarPDF(Request $request)
    {
        $ventas = Venta::whereBetween('fecha', [$request->fecha_inicio, $request->fecha_fin])->get();
        $pdf = PDF::loadView('inventario.pdf', compact('ventas'));
        return $pdf->download('ventas.pdf');
    }
}
