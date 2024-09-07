<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';

    protected $fillable = [
        'producto_id',
        'cantidad',
        'fecha',
        'total',
        'comentario',
    ];

    // Relación con Producto
    public function producto()
    {
        return $this->belongsTo(Product::class);
    }
}
