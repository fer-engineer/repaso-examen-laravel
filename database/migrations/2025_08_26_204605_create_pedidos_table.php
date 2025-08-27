<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Acotejamiento de las tablas
            $table->id('codigo');
            // clave foranea 'cliente' que se refiere con la clave primaria ,
            // 'codigo' en la tabla clientes
            $table->foreignId('cliente_id')->constrained('clientes','codigo');  
            $table->date('fecha');
            $table->decimal('total',8,2);
            $table->timestamps();
            
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
