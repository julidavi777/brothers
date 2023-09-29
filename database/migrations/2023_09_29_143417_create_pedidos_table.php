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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_orden');
            $table->date('fecha_registro');
            $table->float('total_precio');
            $table->float('total_iva');
            $table->string('barrio');
            $table->string('direccion_entrega');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('empleado_id');
            $table->unsignedBigInteger('entregador_id');
            $table->text('observacion');
            $table->unsignedBigInteger('departamento_id'); 
            $table->unsignedBigInteger('municipio_id'); 
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('entregador_id')->references('id')->on('empleados');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
