<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id(); // ID de la mesa
            $table->string('nombre'); // Nombre de la mesa (ej. "Mesa 1")
            $table->enum('estado', ['ocupada', 'libre'])->default('libre'); // Estado de la mesa
            $table->timestamps(); // Campos de timestamp (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesas');
    }
};
