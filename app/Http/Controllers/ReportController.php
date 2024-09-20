<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Inventario; // Asegúrate de que tienes un modelo para Inventario
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InventariosExport;
use Illuminate\Http\Request;


class ReportController extends Controller
{
    public function generatePdf()
    {
        // Obtén los datos del inventario desde la base de datos
        $inventario = Inventario::all();

        // Pasamos los datos del inventario a la vista que generará el PDF
        $pdf = Pdf::loadView('pdf.inventario', ['inventario' => $inventario]);

        // Retorna el PDF descargable
        return $pdf->download('inventario.pdf');
    }

    public function exportarExcel(Request $request)
    {
        $filters = $request->only(['fecha_inicio', 'fecha_fin']);  // Solo los filtros relevantes
        return Excel::download(new InventariosExport($filters), 'inventarios.xlsx');
    }
    



}

