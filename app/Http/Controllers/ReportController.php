<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Inventario; // Asegúrate de que tienes un modelo para Inventario

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

    public function exportExcel()
    {
        return Excel::download(new InventarioExport, 'inventario.xlsx');
    }


}

