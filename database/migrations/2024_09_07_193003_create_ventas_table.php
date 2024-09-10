<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
{
    Schema::create('ventas', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('producto_id'); // Debe ser unsignedBigInteger
        $table->integer('cantidad');
        $table->decimal('precio', 8, 2);
        $table->date('fecha');
        $table->timestamps();

        // Relación con productos
        $table->foreign('producto_id')->references('id')->on('products')->onDelete('cascade');
    });
}

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
