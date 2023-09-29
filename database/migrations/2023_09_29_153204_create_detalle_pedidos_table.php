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
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('producto_id');
            //CAMPOS PRODUCTO
            $table->string('nombre');
            $table->string('descripción'); //descripcion del producto
            $table->float('precio'); //precio de producto
            $table->float('iva'); //iva de producto
            $table->float('cantidad'); //producto
            $table->string('codigo_producto'); 
            $table->string('marca'); 
            $table->string('categoría'); 



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedidos');
    }
};
