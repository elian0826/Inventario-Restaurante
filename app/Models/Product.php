<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price' // Agrega aquí los campos que deseas permitir
    ];

    // Relación inversa con Inventario
    public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'producto_id');
    }
}
