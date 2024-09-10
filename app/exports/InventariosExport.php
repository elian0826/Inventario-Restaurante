<?php

namespace App\Exports;

use App\Models\Inventario;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InventariosExport implements FromQuery, WithHeadings
{
    protected $filters;

    public function __construct(array $filters)
    {
        $this->filters = $filters;
    }

    public function query()
    {
        $query = Inventario::query();

        if (isset($this->filters['fecha_inicio']) && isset($this->filters['fecha_fin'])) {
            $fechaInicio = $this->filters['fecha_inicio'];
            $fechaFin = $this->filters['fecha_fin'];
            $query->whereBetween('fecha', [$fechaInicio, $fechaFin]);
        }

        return $query->with('producto');
    }

    public function headings(): array
    {
        return [
            'ID',
            'Producto',
            'Tipo de Movimiento',
            'Cantidad',
            'Fecha',
        ];
    }
}

