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
        Schema::disableForeignKeyConstraints();
        Schema::create('productos', function(Blueprint $table)
        {
        $table->id();
        $table->string('nombre');
        $table->integer('stock');
        $table->date('fecha_vencimiento');
        $table->unsignedBigInteger('idCategoria');
        $table->foreign('idCategoria')->references('id')->on('categorias');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
