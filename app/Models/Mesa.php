<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    // Definir los campos que pueden ser llenados masivamente
    protected $fillable = [
        'nombre', 
        'estado',
    ];

    /**
     * Método para crear una mesa con asignación masiva.
     */
    public static function crearMesa($nombre)
    {
        return self::create([
            'nombre' => $nombre,
            'estado' => 'libre',  // Asignamos el estado inicial a 'libre'
        ]);
    }
}
