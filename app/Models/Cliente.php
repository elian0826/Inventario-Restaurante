<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    // Definir los campos que se pueden llenar mediante un formulario
    protected $fillable = [
        'nombre',
        'telefono',
        'email',
    ];

    // Si no estás usando timestamps en la tabla
    public $timestamps = false;
}
