<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class ventasExport implements FromCollection
{
    protected $ventas;

    public function __construct($ventas)
    {
        $this->ventas = $ventas;
    }

    public function collection()
    {
        return $this->ventas;
    }
}
